<?php

namespace App\Routes;

use App\Controllers\Admin\HomeController;

class Admin
{
    private static $routes = [];

    public static function route()
    {
        Router::get('/admin', function () {
            $home = new HomeController();
            $home->index();
        });

        Router::get('/admin/action', function () {
            dd(Admin::$routes['/admin/action']);
        });
    }
}
