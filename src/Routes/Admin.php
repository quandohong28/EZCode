<?php

namespace App\Routes;

use App\Controllers\Admin\HomeController;

class Admin
{
    public static function route()
    {
        Router::get('/admin', function () {
            $home = new HomeController();
            $home->index();
        });
    }
}
