<?php


namespace App\Router;

class Router
{
    public static array $getRoutes;
    public static array $postRoutes;
    private $updateRoutes;
    private $deleteRoutes;

    public static function get($uri, $controller, $method)
    {
        self::$getRoutes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'http' => 'get'
        ];

    }

    public static function post($uri, $controller, $method)
    {
        self::$postRoutes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'http' => 'post'
        ];

    }


}