<?php

namespace src\Core;

class View {

    public function render(string $contentName, array $params = []) {
        $templatePath = 'src/Templates/main_template.php';
        if (file_exists($templatePath)) {
           // extract($params);
           require $templatePath;
       }
    }
    
    

}