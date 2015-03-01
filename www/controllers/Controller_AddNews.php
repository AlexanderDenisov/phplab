<?php


class Controller_AddNews {

    public function  actionAdd() {
        $items = News::addOneNews();
        $view = new View();
        $view->items = $items;
        $view->display('template_AddNews.php');

    }

}
