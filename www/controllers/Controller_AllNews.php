<?php


class Controller_AllNews
{

    public function actionAll()
    {

        $all_articles = new NewsModel();
        $all_articles = NewsModel::findAll();
        $view = new View();
        $view->items = $all_articles;
        $view->display('template_AllNews.php');

        /*$article->date = $_GET['date'];
        $article->title = $_GET['title'];
        $article->text_news = $_GET['text_news'];
        $article->insert();
        $view = new View();
        $view->items = $article;
        $view->display('template_AddNews.php');

        var_dump(NewsModel::findOneByPk(1));*/

        /*$db = new DB();
        $res = $db->query('SELECT * FROM news WHERE id=:id', [':id' => 2]);
        var_dump($res);
        die;*/

        /*$items = News::getAll();
        $view = new View();
        $view->items = $items;
        $view->display('template_AllNews.php');*/

    }
} 