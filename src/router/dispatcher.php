<?php

namespace App\Router;

use function App\Helpers\response;

class Dispatcher
{


    public static function dispatch($routes)
    {
        $uri = $_SERVER['REQUEST_URI'];
        foreach ($routes as $route) {
            if ($uri === $route['uri']) {
                echo "passou";

                return;
            }

        }

        response()->json('a');
    }
}
