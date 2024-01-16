<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

require_once 'vendor/autoload.php';

class UserController extends Controller
{
    public function index()
    {
        $user = new User('users');
        $users = $user->all();
        $this->dd($users);
        $this->view('home', ['users' => $users]);
    }
}
