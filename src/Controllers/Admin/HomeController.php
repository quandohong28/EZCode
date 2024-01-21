<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        view('admin');
    }
}
