<?php

namespace src\Controller;

use \src\Core\View;
use \src\Core\DataPage;

class Controller {

    private $view, $dataPage, 
            $header = [
                ['logo' => './public/img/Main_bg.jpg', 'title' => 'Everything You Love About Coffee'],
                ['logo' => './public/img/coffee-shop.jpg', 'title' => 'Our Coffee'],
                ['logo' => './public/img/pleasure.jpg', 'title' => 'For your pleasure - Our contacts'],
                ['logo' => './public/img/pleasure.jpg', 'title' => 'Whoops, that page is gone'],
            ];

    function __construct(View $view, DataPage $dataPage) {
        $this->view = $view;
        $this->dataPage = $dataPage;
    }

    public function mainPage() {
        $this->view->render('main.php', [$this->dataPage->getTopCoffeeList(), $this->header[0]['logo'],  $this->header[0]['title'], ['active', null, null]]);
    }

    public function aboutPage() {
        $this->view->render('about.php', [$this->dataPage->getCoffeeList(), $this->header[1]['logo'],  $this->header[1]['title'], [null, 'active', null]]);
    }

    public function contactPage() {
        $this->view->render('contact.php', [$this->dataPage->getCoffeeList(), $this->header[2]['logo'],  $this->header[2]['title'], [null, null, 'active']]);
    }

    public function PageNotFound() {
        $this->view->render('404.php', [[], $this->header[3]['logo'],  $this->header[3]['title'], [null, null, null]]);
    }

}