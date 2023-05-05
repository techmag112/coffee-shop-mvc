<?php

namespace src\App;
use \src\Core\DataPage;
use \src\Core\View;
use \src\Core\Router;
use \src\Controller\Controller;


class Container {

    private array $objects = [];

    function __construct() {
        $this->objects = [
            'model' => fn() => new DataPage(),
            'view' => fn() => new View(), 
            'controller' => fn() => new Controller($this->get('view'), $this->get('model')),
            'router' => fn() => new Router($this->get('controller')),
        ];
    }

    public function has(string $id) {
        return isset($this->objects[$id]);
    }

    public function get(string $id) {
        return $this->objects[$id]();
    }

}