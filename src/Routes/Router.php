<?php

namespace App\Routes;

class Router
{
    private static $routes = [];

    public static function get(string $route, callable $callback = null)
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            self::$routes[$route] = $callback;
        }
    }

    public static function post(string $route, callable $callback = null)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            self::$routes[$route] = $callback;
        }
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
