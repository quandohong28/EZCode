<?php

namespace App\Routes;

use App\Controllers\UserController;

class User
{
    public static function route()
    {
        Router::route('/users', function () {
            $user = new UserController();
            $user->index();
        });

        Router::route('/user/edit', function () {
            $user = new UserController();
            $user->create();
        });
    }
}
