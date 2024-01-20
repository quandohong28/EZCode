<?php

namespace App\Controllers;

use App\Models\PageLayout;
use App\Controllers\Controller;

class PageLayoutController extends Controller
{
    public function admin()
    {
        PageLayout::render('admin');
        $this->view('admin_page');
    }

    public function user()
    {
        PageLayout::render('user');
        $this->view('user_page');
    }
}
