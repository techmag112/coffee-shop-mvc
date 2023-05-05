<?php
    namespace src\App;
    require_once 'src/Core/view.php'; 
    require_once 'src/Controller/Controller.php'; 
    require_once 'src/Core/AbstractRoutes.php'; 
    require_once 'src/Core/Router.php'; 
    require_once 'src/Core/DataPage.php'; 
    require_once 'Container.php'; 
    $router = (new Container())->get('router'); // формируем контейнер инъекций зависимостей
    $router->run(); // запускаем маршрутизатор
