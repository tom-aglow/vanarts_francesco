<?php
session_start();

use core\Controller;

/* ------autoload classes------*/

spl_autoload_register(function ($className) {
    $className = str_replace('\\', '/', $className);
    if (file_exists($className . '.php')) {
        include_once($className . '.php');
    }
});


/* ------get params from url------*/

$url_query = explode('/', $_GET['q']);
if ($url_query[count($url_query) - 1] === '') {
    unset($url_query[count($url_query) - 1]);
}


$page = $url_query[0] ?? 'home';


/* ------check if template exists------*/

if (!file_exists("templates/" . $page . ".php")) {
    $page = "error";
}

/* ------render the page------*/

$controller = (new Controller())->render($page);
