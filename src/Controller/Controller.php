<?php

namespace src\Controller;

use \src\Core\View;
use \src\Core\DataPage;

class Controller {

    private $view, $dataPage;

    function __construct(View $view, DataPage $dataPage) {
        $this->view = $view;
        $this->dataPage = $dataPage;
    }

    public function mainPage() {
        $this->view->render('main.php', $this->dataPage->getTopCoffeeList());
    }

    public function aboutPage() {
        $this->view->render('about.php', $this->dataPage->getCoffeeList());
    }

    public function contactPage() {
        $this->view->render('contact.php', $this->dataPage->getCoffeeList());
    }

    public function PageNotFound() {
        $this->view->render('404.php');
    }

}