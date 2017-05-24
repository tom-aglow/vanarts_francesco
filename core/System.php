<?php

namespace core;

class System {
//    class for rendering page template
//    put all variables into template .php, cache the result and return it as string
    public static function buildTemplate ($path, $vars = []) {
        extract($vars);
        ob_start();
        include ("templates/$path");
        return ob_get_clean();
    }
}