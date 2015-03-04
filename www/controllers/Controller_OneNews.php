<?php


class Controller_OneNews
{

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = new NewsModel();
        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 