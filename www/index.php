<?php




require_once __DIR__ . '/autoload.php';


$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$pathParts = explode('/', $path);

var_dump($path);
var_dump($pathParts);



$ctrl = !empty($pathParts[1]) ? ucfirst($pathParts[1]) : 'AllNews';
$act = !empty($pathParts[2]) ? ucfirst($pathParts[2]) : 'All';

var_dump($ctrl);
var_dump($act);



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