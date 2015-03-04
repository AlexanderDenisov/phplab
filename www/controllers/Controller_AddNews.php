<?php


class Controller_AddNews
{

    public function  actionAdd()
    {
        $article = new NewsModel();
        $article->fill();
        $view = new View();
        $view->items = $article;
        $view->display('template_AddNews.php');
    }

}
