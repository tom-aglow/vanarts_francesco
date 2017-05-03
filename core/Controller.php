<?php

namespace core;

class Controller {

    public function page_index () {
        return $this;
    }

    public function render () {
        $html = System::buildTemplate('main.php', [
            'page_title' => '',
            'page_content' => ''
        ]);

        echo $html;
    }
}