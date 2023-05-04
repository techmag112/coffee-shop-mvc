<?php

namespace src\Core;

use \src\Controller\MainController;
use \src\Controller\ErrorController;

class Router extends AbstractRoutes {
    
    public function run() {

        $uri = $_SERVER['REQUEST_URI'];
        if (isset($this->routes[$uri])) {
            $test = $this->routes[$uri][0];
            $controller = new $this->routes[$uri][0];
            $action = $this->routes[$uri][1] ?? 'mainPage';
        } else {
            $controller = ErrorController::class;
            $action = 'PageNotFound';
        }
        $controller->$action();

    }

}