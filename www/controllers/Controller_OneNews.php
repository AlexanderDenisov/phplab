<?php


class Controller_OneNews
{

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');

    }

} 