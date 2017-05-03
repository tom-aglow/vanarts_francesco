<?php

namespace core;

class System {
    public static function buildTemplate ($path, $vars = []) {
        extract($vars);
        ob_start();
        include ("templates/$path");
        return ob_get_clean();
    }
}