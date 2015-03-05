<?php


class Controller_AllNews
{

    public function actionAll()
    {
        $all_articles = NewsModel::findAll();
        $view = new View();
        $view->items = $all_articles;
        $view->display('template_AllNews.php');
    }
}

?>