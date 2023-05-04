<?php
// require_once 'core/model.php'; 
    require_once 'src/Core/view.php'; 
    require_once 'src/Controller/ErrorController.php'; 
    require_once 'src/Controller/MainController.php'; 
    require_once 'src/Core/AbstractRoutes.php'; 
    require_once 'src/Core/Router.php'; 
    require_once 'src/Core/DataPage.php'; 
    
    $router = new src\Core\Router; // запускаем маршрутизатор
    $router->run();
