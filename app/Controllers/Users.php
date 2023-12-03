<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Files\File;

class Users extends BaseController
{
    public function render_user_layout($data)
    {
        echo view('header', $data);
        echo view('Users/index', $data);
        echo view('footer');
    }

    public function render_admin_session($data)
    {
        echo view('header', $data);
        echo view('Users/index', $data);
        echo view('Users/all', $data);
        echo view('footer');
    }

    public function index($user_id)
    {
        $model = new UsersModel();
        $data['user'] = $model->get_by_id($user_id);
        $data['files'] = json_decode($data['user']['file'] ?? []);
        $data['role'] = $data['user']['role'];

        if ($data['role'] === 'user') {
            $this->render_user_layout($data);
        } else {
            $data['users'] = $model->get_all();
            $this->render_admin_session($data);
        }
    }

    public function add_user()
    {
        $model = new UsersModel();


        if ($this->request->getMethod() === 'post') {
            $model->save(['email' => $this->request->getPost('email'), 'name' => $this->request->getPost('name'), 'password' => $this->request->getPost('password')]);
        }
        if (empty($model->errors())) {
            return redirect()->to(base_url());
        } else {
            $data['users'] = $model->get_all();
            $this->render_user_layout(['errors' => $model->errors(), 'users' => $data['users']]);
        }
    }

    public function add_image($id)
    {
        $model = new UsersModel();

        if ($this->request->getMethod() === 'post') {

            $file = $this->request->getFile('file');

            if (!$file->hasMoved()) {
                $filepath = $file->move('uploads/' . $id . '/');
                $fileName = $file->getClientName();
                $currentUser = $model->get_by_id($id);
                $currentFiles = json_decode($currentUser['file']) ?? [];
                array_push($currentFiles, $fileName);
                $data = ['file' => json_encode($currentFiles)];

                $model->update($id, $data);


                return redirect()->to(base_url() . 'users/' . $id);
            }
        }
    }

    public function delete_image($user_id, $imageName)
    {
        $model = new UsersModel();

        if ($this->request->getMethod() === 'get') {

            $currentUser = $model->get_by_id($user_id);
            $currentFiles = json_decode($currentUser['file']);

            $currentFiles = array_filter($currentFiles, function ($file) use ($imageName) {
                return $file != $imageName;
            });

            $data = ['file' => json_encode($currentFiles)];

            $model->update($user_id, $data);


            return redirect()->to(base_url() . 'users/' . $user_id);
        }
    }

    public function edit($id)
    {
        $model = new UsersModel();
        $data['users'] = $model->get_by_id($id);
        echo view('header', $data);
        echo view('Users/edit', $data);
        echo view('footer');
    }

    public function update($id)
    {
        $model = new UsersModel();

        if ($this->request->getMethod() === 'post') {
            $data = [
                'email' => $this->request->getPost('email'), 
                'password' => $this->request->getPost('password'), 
                'name' => $this->request->getPost('name')
            ];
            $model->update($id, $data);

            return redirect()->to(base_url() . 'users/' . session()->user);
        }
    }

    public function delete($id)
    {
        $model = new UsersModel();
        $model->delete($id);

        return redirect()->back();
    }

    public function login()
    {
        $model = new UsersModel();

        if ($this->request->getMethod() === 'post') {
            $user = $model->login([
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password')
            ]);

            if (isset($user)) {
                session()->set(['user' => $user['id'], 'name' => $user['name'], 'email' => $user['email'], 'file' => $user['file']]);
                return redirect()->to(base_url() . 'users/' . $user['id']);
            }

            session()->setFlashdata('login_error', 'Los datos ingresados no son correctos');
        }

        return redirect()->to(base_url());
    }

    public function logout()
    {

        session()->destroy();
        return redirect()->to(base_url());
    }
}
