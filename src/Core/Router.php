<?php

namespace src\Core;

use \src\Controller\MainController;
use \src\Controller\ErrorController;

class Router extends AbstractRoutes {
    
    public static function run() {

        $uri = $_SERVER['REQUEST_URI'];
        
        if (isset($this->routes[$uri])) {
            $controller = new $this->routes[$uri][0];
            $action = $this->routes[$uri][1] ?? 'mainAction';
        } else {
            $controller = ErrorController::class;
            $action = 'PageNotFound';
        }
        $controller->$action();
    }

}