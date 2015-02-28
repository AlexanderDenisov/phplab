<?php
//require_once __DIR__ . '/../models/News.php';


class Controller_AllNews {

    public function actionAll() {
        $items = News::getAll();
        $view = new View();
        //$view->assign('items', $items);
        $view->items = $items;
        $view->display('news/template_AllNews.php');
        //include __DIR__ . '/../views/news/template_view.php';
    }
} 