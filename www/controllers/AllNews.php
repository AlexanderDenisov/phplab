<?php

namespace Application\Controllers;
use Application\Models\News;

class AllNews
{

    public function actionAll()
    {
        $all_articles = News::findAll();
        $view = new \View();
        $view->items = $all_articles;
        $view->display('template_AllNews.php');
    }
}

?>