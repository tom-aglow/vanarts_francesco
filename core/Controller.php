<?php

namespace core;

class Controller {



    public function render ($page) {

        $pageContent = System::buildTemplate($page . '.php', [

        ]);

        $html = System::buildTemplate('main.php', [
            'pageTitle' => '',
            'pageContent' => $pageContent,        //array
            'pageContentClass' => $page          //string
        ]);

        echo $html;
    }
}