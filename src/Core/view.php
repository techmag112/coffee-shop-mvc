<?php

namespace Mvc\src\Core;

class View {

    public function render(string $contentName, string $templateName, array $params = null) {
        $templatePath = 'src/Templates/' . $templateName . '.php';

        if (file_exists($templatePath)) {
            extract($params);
            require($templatePath);
        }
    }
    
    

}