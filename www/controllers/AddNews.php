<?php

namespace Application\Controllers;
use Application\Models\News;
use Application\Classes\View;

class AddNews
{

    public function  actionAdd()
    {
        $article = new News();
        $article->date = $_POST['date'];
        $article->title = $_POST['title'];
        $article->text_news = $_POST['text_news'];
        $article->save();
        $view = new View();
        $view->item = $article;
        $view->display('template_OneNews.php');
    }

}
