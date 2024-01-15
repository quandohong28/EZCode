<?php

namespace App\Routes;

class Router
{
    private static $routes = [];

    public static function route(string $route, callable $callback)
    {
        self::$routes[$route] = $callback;
    }

    public static function run(string $uri)
    {
        $found = false;
        foreach (self::$routes as $route => $callback) {
            if ($route === $uri) {
                $found = true;
                $callback();
                break;
            }
        }

        if (!$found) {
            $notFoundCallback = self::$routes["/404"];
            $notFoundCallback();
        }
    }
}
