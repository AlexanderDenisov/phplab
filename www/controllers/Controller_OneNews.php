<?php


class Controller_OneNews
{

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = NewsModel::findOneByPk($id);
        if (empty($item)) {
            $e = new E404Exception(date('d.m.Y H:i:s') . ' Статья удалена или перемещена' . "\r\n");
            throw $e;
        }
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }
} 