<?php

require_once __DIR__ . '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';


$controllerClassName = $ctrl . 'Controller';
//require_once __DIR__ . '/controllers/' . $controllerClassName . '.php';
$controller = new $controllerClassName;
$method = 'action' . $act;
$controller->$method();


if (!empty($_POST)) {
    $data = [];
    if (!empty($_POST['title'])) {
        $data['title'] = $_POST['title'];
    }
    if (!empty($_POST['date'])) {
        $data['date'] = $_POST['date'];
    }
    if (!empty($_FILES)) {
        $a = new AdminController();
        $res = $a->File_upload('newsfile');
        if (false !== $res) {
            $data['newsfile'] = $res;
        }
    }
    if (isset($data['date']) && isset($data['title']) && isset($data['news'])) {
        $item = AddNews::addOneNews();;
        header('Location: /index.php');
        die;
    }
}