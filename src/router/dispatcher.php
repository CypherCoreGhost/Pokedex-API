<?php

namespace App\Router;

use function App\Helpers\response;

class Dispatcher
{


    public static function dispatch($routes)
    {
        $found = true;
        $uri = $_SERVER['REQUEST_URI'];
        $http = $_SERVER['REQUEST_METHOD'];
        foreach ($routes as $route) {
            if ($uri === $route['uri']) {

                $found = true;
                continue;
            }

            if ($http !== strtoupper($route['http'])) {

                response()->json("method($http) is not correct");
            }
            $controller = new $route['controller']();
            $nameMethod = $route['method'];
            $controller->$nameMethod();
            return;

            if (!$found) {
                response()->json("route($uri) not found");
                return;
            }

        }

        // response()->json("route($uri) not found");
    }
}
