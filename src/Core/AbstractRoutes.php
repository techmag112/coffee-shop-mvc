<?php

namespace src\Core;

abstract class AbstractRoutes {

    protected array $routes = [
        '/' => [MainController::class],
        '/about/' => [MainController::class, 'aboutAction'],
        '/contact/' => [MainController::class, 'contactAction'],
    ];

}