<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model

{
    protected $table = 'user';
    protected $allowedFields = ['email', 'name', 'password', 'file'];
    protected $validationRules = [
        'email'        => 'required|valid_email|is_unique[user.email]'
    ];
    protected $validationMessages   = [
        'email' => [
            'is_unique' => 'El usuario ya esta registrado',
        ],
    ];

    public function get_all()
    {
        return $this->findAll();
    }

    public function get_by_id($id)
    {
        return $this->where(['id' => $id])->first();
    }

    public function login($data)
    {
        return $this->asArray()->where($data)->first();
    }

}
