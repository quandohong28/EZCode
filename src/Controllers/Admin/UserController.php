<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User;
use App\Models\PageLayout;

class UserController extends Controller
{
    public function index()
    {
        return view('admin', [
            'content' => PageLayout::admin('user'),
        ]);
    }

    public function show($id)
    {
        
    }
}
