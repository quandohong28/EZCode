<?php

namespace App\Routes;

use App\Controllers\HomeController;

class Home
{
    public static function route()
    {
        Router::route('/', function () {
            $home = new HomeController();
            $home->index();
        });
    }
}
