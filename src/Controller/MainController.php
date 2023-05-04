<?php

namespace src\Controller;

use \src\Core\View;

class MainController {

    public $view;

    function __construct() {
        $this->view = new View();
    }

    public function mainPage() {
        $this->view->render('main.php');
    }

    public function aboutPage() {

        
        $this->view->render('about.php');
    }

    public function contactPage() {

        
        $this->view->render('contact.php');
    }
}