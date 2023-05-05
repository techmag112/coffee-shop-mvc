<?php

namespace src\Core;

use \src\Controller\Controller;

class Router extends AbstractRoutes {

    private $controller;

    function __construct(Controller $controller) {
        $this->controller = $controller;
        parent::__construct();
    }
    
    public function run() {

        $uri = $_SERVER['REQUEST_URI'];
        if (isset($this->routes[$uri])) {
            $action = $this->routes[$uri];
        } else {
            $action = 'PageNotFound';
        }
        $this->controller->$action();

    }

}