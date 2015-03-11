<?php
use Application\Classes\E404Exception;
use Application\Classes\View;

/*
$content = file_get_contents(__DIR__ .'/test.json');
$obj = json_decode($content);
echo $obj->foo;

$obj = new stdClass();
$obj->title = 'War and Peace';
$obj->text = 'The most longest text';
echo json_encode($obj);
die;
*/


require_once __DIR__ . '/autoload.php';


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'AllNews';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';


$controllerClassName = 'Application\\Controllers\\' . $ctrl;


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