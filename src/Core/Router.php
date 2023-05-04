<?php

namespace Mvc\src\Core;

use Mvc\src\Controllers\MainController;

class Router {

    private array $routes = [
        '/' => [MainController::class],
        '/about/' => [MainController::class, 'aboutAction'],
        '/contact/' => [MainController::class, 'contactAction'],
    ];
    
    public static function run() {

        $uri = $_SERVER['REQUEST_URI'];
        
        if (!isset($this->routes[$uri])) {
            echo '404';
            return;
        }

        $controller = new $this->routes[$uri][0];
        $action = $this->routes[$uri][1] ?? 'mainAction';
        $controller->$action();

    }

}