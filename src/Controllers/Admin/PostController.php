<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Post;
use App\Models\PageLayout;

class PostController extends Controller
{
    public function index()
    {
        return view('admin', [
            'content' => PageLayout::admin('post'),
        ]);
    }
}
