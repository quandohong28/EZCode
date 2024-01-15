<?php

use App\Routes\Router;
use App\Controllers\UserController;

require_once 'vendor/autoload.php';

Router::route('/', function () {
    $home = new UserController();
    $home->index();
});

Router::route('/404', function () {
    require_once 'src/Views/404.php';
});

$current = $_SERVER['REQUEST_URI'];
Router::run($current);
