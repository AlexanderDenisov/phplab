<?php


class Controller_AllNews
{

    public function actionAll()
    {

        var_dump(NewsModel::findAll());

        /*$db = new DB();
        $res = $db->query('SELECT * FROM news WHERE id=:id', [':id' => 2]);
        var_dump($res);*/
        die;

        /*$items = News::getAll();
        $view = new View();
        $view->items = $items;
        $view->display('template_AllNews.php');*/

    }
} 