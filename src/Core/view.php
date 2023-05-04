<?php

namespace src\Core;

class View {

    public function render(string $contentName, array $params = null, string $templateName = 'main_template') {
        $templatePath = 'src/Templates/' . $templateName . '.php';

        if (file_exists($templatePath)) {
            extract($params);
            require($templatePath);
        }
    }
    
    

}