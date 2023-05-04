<?php

namespace src\Controller;

use \src\Core\View;

class ErrorController {

    public $view;

    function __construct() {
        $this->view = new View();
    }

    public function PageNotFound() {
        
        $this->view->render('404.php');
    }

}