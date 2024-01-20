<?php

namespace App\Controllers\User;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('user');
    }
}
