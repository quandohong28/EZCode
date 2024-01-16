<?php

namespace App\Routes;

use App\Controllers\HomeController;

class Home
{
    public static function route()
    {
        Router::get('/', function () {
            $home = new HomeController();
            $home->index();
        });
    }
}
