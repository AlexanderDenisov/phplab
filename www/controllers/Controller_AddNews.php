<?php


class Controller_AddNews
{

    public function  actionAdd()
    {
        $article = new NewsModel();
        $article->date = $_POST['date'];
        $article->title = $_POST['title'];
        $article->text_news = $_POST['text_news'];
        $article->insert();
        $view = new View();
        $view->item = $article;
        $view->display('template_OneNews.php');
    }

}
