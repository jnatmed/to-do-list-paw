<?php

namespace App\core;

class Router
{
    public $routes = [];

    function define($routes)
    {
        $this->routes = $routes;
    }

    function direct($request)
    {
        $operation = $this->routes["{$request->method} {$request->path}"];
        list($class, $method) = explode('@',$operation);
        $fullClass = "App\controllers\\$class";
        $controller = new $fullClass;
        $controller->$method();

        echo "<pre>";
        var_dump($operation);
        var_dump($fullClass);
        var_dump($controller);
        exit(0);
    
    }
}


?>