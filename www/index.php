<?php

//error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'AllNews';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


$controllerClassName = 'Controller_' . $ctrl;
//require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
$controller = new $controllerClassName;
$method = 'action' . $act;

try {

    $controller->$method();
} catch (Exception $e) {
    $view = new View();
    $view->error = $e->getMessage();
    error_log('You messed up!', 3, __DIR__ . '/errors.log');
    $view->display('template_view.php');
}