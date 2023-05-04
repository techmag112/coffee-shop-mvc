<?php

namespace src\Controller;

use \src\Core\View;

class MainController {

    public $view;

    function __construct() {
        $this->view = new View();
    }

    public function mainAction() {

        
        $view->render('main');
    }

    public function aboutAction() {

        
        $view->render('about');
    }

    public function contactAction() {

        
        $view->render('contact');
    }
}