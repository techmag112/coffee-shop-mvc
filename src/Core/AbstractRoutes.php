<?php

namespace src\Core;

abstract class AbstractRoutes {

    protected array $routes = [];
    
    function __construct() {
        $this->routes = [
            '/' => ['\src\Controller\MainController'],
            '/about/' => ['\src\Controller\MainController', 'aboutPage'],
            '/contact/' => ['\src\Controller\MainController', 'contactPage'],
        ];
    }

}