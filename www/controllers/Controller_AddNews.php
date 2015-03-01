<?php
//require_once __DIR__ . '/../models/News.php';

class Controller_AddNews {

    public function  actionAdd() {
        $items = News::addOneNews();
        $view = new View();
        //$view->assign('items', $items);
        $view->items = $items;
        //include __DIR__ . '/../views/news/template_view.php';
        $view->display('template_AddNews.php');

    }

}
