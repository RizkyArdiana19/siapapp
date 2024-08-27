<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Auth extends BaseController
{   
    public function login()
    {
        return view('auth/login');
    }
    
    public function register()
    {
        helper('form');
        $model = new UserModel();

        if ($this->request->getMethod() === 'post') {
            $data = [
                'phone_number'     => $this->request->getPost('phone_number'),
                'email'            => $this->request->getPost('email'),
                'username'         => $this->request->getPost('username'),
                'name'             => $this->request->getPost('name'),
                'password_hash'    => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            ];

            log_message('debug', 'Data yang diterima: ' . print_r($data, true));

            if ($model->save($data)) {
                return redirect()->to('/login')->with('message', 'Registration successful');
            } else {
                log_message('error', 'Error saat menyimpan data: ' . print_r($model->errors(), true));
                return redirect()->back()->with('errors', $model->errors())->withInput();
            }
        }

        return view('auth/register');
    }
}
