<?php

namespace App\Controllers\User;

use App\Controllers\Controller;
use App\Models\User;
use App\Models\PageLayout;

class UserController extends Controller
{
    public function teacher()
    {
        return view('user', [
            'content' => PageLayout::user('teacher'),
        ]);
    }
}
