<?php

error_reporting(E_ALL);

require __DIR__ . '/helpers/helper.php';
require_once __DIR__ . '/vendor/autoload.php';

//простейший роутер
$action = (isset($_GET['action'])) ? $_GET['action'] : "index";

$controller = '\App\Controllers\MainController';
if ( is_callable(array($controller, $action)) ) {
    $object = new $controller();
    $object->$action();
} else {
    //тут лучше на 404 бросать
    throw new \Exception("Controller class $controller not found");
}