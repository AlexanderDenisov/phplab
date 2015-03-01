<?php
//require_once __DIR__ . '/../models/News.php';


class Controller_AllNews {

    public function actionAll() {
        $items = News::getAll();
        $view = new View();
        //$view->assign('items', $items);
        $view->items = $items;
        $view->display('template_AllNews.php');

    }
} 