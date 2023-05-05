<?php

namespace src\Core;

abstract class AbstractRoutes {

    protected array $routes = [];
    
    function __construct() {
        $this->routes = [
            '/' => 'mainPage',
            '/about/' => 'aboutPage',
            '/about' => 'aboutPage',
            '/contact/' => 'contactPage',
            '/contact' => 'contactPage',
        ];
    }

}