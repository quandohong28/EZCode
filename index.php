<?php

use App\Routes\Exception;
use App\Routes\Home;
use App\Routes\Router;
use App\Routes\User;

require_once 'vendor/autoload.php';
require_once 'config.php';

User::route();
Exception::route();
Home::route();

$current = $_SERVER['REQUEST_URI'];
Router::run($current);
