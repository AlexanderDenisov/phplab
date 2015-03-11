<?php

namespace Application\Controllers;
use Application\Models\News;
use Application\Classes\View;

class Update
{
    public function actionUpdate()
    {
        $art = new News();
        $art->id = $_GET['id'];
        $art->title = $_POST['title'];
        $art->text_news = $_POST['text_news'];
        $art->save();
        $view = new View();
        $view->item = $art;
        $view->display('template_OneNews.php');
    }
} 