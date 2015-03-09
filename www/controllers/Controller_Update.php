<?php


class Controller_Update
{
    public function actionUpdate()
    {
        $art = new NewsModel();
        $art->id = $_GET['id'];
        $art->title = $_POST['title'];
        $art->text_news = $_POST['text_news'];
        $art->save();
        $view = new View();
        $view->item = $art;
        $view->display('template_OneNews.php');
    }
} 