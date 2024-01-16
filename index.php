<?php

use App\Routes\Auth;
use App\Routes\Exception;
use App\Routes\Home;
use App\Routes\Router;

require_once 'vendor/autoload.php';
require_once 'config.php';

Exception::route();
Home::route();
Auth::route();

$current = $_SERVER['REQUEST_URI'];
Router::run($current);
