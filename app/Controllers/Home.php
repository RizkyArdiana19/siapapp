<?php

namespace App\Controllers;

use Myth\Auth\Models\UserModel;

class Home extends BaseController
{
    public function home()
    {
        return view('home');
    }

    public function login()
    {
        return view('auth/login');
    }

    public function user()
    {
        return view('user/index');
    }
}
