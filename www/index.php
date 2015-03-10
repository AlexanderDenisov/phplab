<?php

//error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'AllNews';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


$controllerClassName = 'Controller_' . $ctrl;


try {

    $controller = new $controllerClassName;
    $method = 'action' . $act;
    $controller->$method();
} catch (E404Exception $e) {
    $view = new View();
    error_log($view->error = $e->getMessage(), 3, __DIR__ . '/errors.log');
    $view->display('/template_404.php');
} catch (PDOException $erdbh) {
    $view = new View();
    error_log($view->error = $erdbh->getMessage(), 3, __DIR__ . '/errors.log');
    $view->display('/template_403.php');
}