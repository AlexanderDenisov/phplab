<?php

namespace Application\Controllers;
use Application\Models\News;

class AllNews
{

    public function actionAll()
    {
        $all_articles = News::findAll();
        /*echo json_encode($all_articles);
        die;*/
        $view = new \View();
        $view->items = $all_articles;
        $view->display('template_AllNews.php');
    }
}

?>