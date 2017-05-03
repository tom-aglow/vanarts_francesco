<?php
session_start();

use core\Controller;

/* ------autoload classes------*/

spl_autoload_register(function ($className) {
    $className = strtolower($className);
    $className = str_replace('\\', '/', $className);
    if (file_exists($className . '.php')) {
        include_once($className . '.php');
    } else {
        //TODO how exceptions will be handled?
//        throw new Exception();
    }
});


/* ------get params from url------*/

$url_query = explode('/', $_GET['q']);
if ($url_query[count($url_query) - 1] === '') {
    unset($url_query[count($url_query) - 1]);
}



$methodName = $url_query[0] ?? 'index';
$methodName = 'page_' . $methodName;

//TODO check if method exist

$controller = (new Controller())->$methodName();

$controller->render();
