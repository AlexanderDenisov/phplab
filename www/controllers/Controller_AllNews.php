<?php


class Controller_AllNews
{

    public function actionAll()
    {
        $items = News::getAll();
        $view = new View();
        $view->items = $items;
        $view->display('template_AllNews.php');

    }
} 