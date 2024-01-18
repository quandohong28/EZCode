<?php

namespace App\Routes;

class Router
{
    private static $routes = [];

    public static function get(string $route, callable $callback = null)
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            preg_match('/^\/(?: (?P<controller>\w+) (?:\/(?P<action>\w+) (?:\/(?P<slug>[\w\-]+))?)?)?$/', $route, $matches);

            self::$routes[$route] = [
                'callback' => $callback,
                'controller' => $matches['controller'] ?? null,
                'action' => $matches['action'] ?? null,
                'slug' => $matches['slug'] ?? null,
            ];
        }
    }

    public static function post(string $route, callable $callback = null)
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            preg_match('/^\/(?: (?P<controller>\w+) (?:\/(?P<action>\w+) (?:\/(?P<slug>[\w\-]+))?)?)?$/', $route, $matches);

            self::$routes[$route] = [
                'callback' => $callback,
                'controller' => $matches['controller'] ?? null,
                'action' => $matches['action'] ?? null,
                'slug' => $matches['slug'] ?? null,
            ];
        }
    }

    public static function run(string $uri)
    {
        $found = false;
        foreach (self::$routes as $route => $partial) {
            if ($route === $uri) {
                $found = true;
                $callback = $partial['callback'];
                if (is_callable($callback)) {
                    $callback();
                }
                break;
            }
        }

        if (!$found) {
            $notFoundCallback = self::$routes["/404"];
            $notFoundCallback();
        }
    }
}
