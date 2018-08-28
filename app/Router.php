<?php

class Router
{
    public $routes = [
    ];

    public function loadRoutes($file): void
    {
       $this->routes = require $file;
    }

    public function route($url, $method): void
    {
//        die(var_dump($this->routes));
        if (array_key_exists($url, $this->routes[$method])) {
            require $this->routes[$method][$url];
        }
        else {
            require 'views/not-found-view.php';
        }
    }
}