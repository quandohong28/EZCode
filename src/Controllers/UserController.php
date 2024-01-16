<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        $user = new User();
        $users = $user->all();


        $this->view('users/list', ['users' => $users]);
    }

    public function create()
    {
        $user = new User();

        $data = [
            'username' => 'dasd',
            'password' => '1d',
            'email' => 'quandohong29@gmail.com',
        ];

        $rules = [
            'username' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email',
        ];

        $validationErrors = $user->validate($data, $rules);

        if (!empty($validationErrors)) {
            $this->view('home', ['errors' => $validationErrors]);
        } else {
            $users = $user->create($data);
            $this->view('home', ['users' => $users]);
            $this->redirect('/');
        }
    }

    public function edit($id) {
        $user = new User();
        $user = $user->find(2);
        $this->view('users/edit', ['user' => $user]);
    }
}
