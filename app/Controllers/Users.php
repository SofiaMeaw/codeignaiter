<?php
namespace App\Controllers;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function render_user_layout($data) {
        echo view('header', $data);
        echo view('Users/all', $data);
        echo view('footer');
    }

    public function index() {
        $model = new UsersModel();
        $data['users'] = $model->get_all();
        $this->render_user_layout($data);
    }


    public function add() {
        $model = new UsersModel();


        if($this->request->getMethod() === 'post')
        {
            $model->save(['email' => $this->request->getPost('email'),'password' => $this->request->getPost('password')]);
        }
        if(empty($model->errors())){
            return redirect()->to(base_url() . 'Users');
        } else {
            $data['users'] = $model->get_all();
            $this->render_user_layout(['errors' => $model->errors(), 'users' => $data['users']]);
        }
        
    }

    public function edit($id){
        $model = new UsersModel();
        $data['users'] = $model->get_by_id($id);
        echo view('header', $data);
        echo view('Users/edit', $data);
        echo view('footer');

    }

    public function update($id){
        $model = new UsersModel();

        if($this->request->getMethod() === 'post'){
            $data = ['email' => $this->request->getPost('email'),'password' => $this->request->getPost('password')];
            $model->update($id, $data);
    
            return redirect()->to(base_url() . 'users');
        }
    }

    public function delete($id){
        $model = new UsersModel();
        $model->delete($id);

        return redirect()->to(base_url() . 'users');

    }
}