<?php


class Controller_OneNews
{

    public function actionOne()
    {
        $id = $_GET['id'];

        if (empty($id)) {
            $e = new E404Exception(date('d.m.Y H:i:s') . ' Не указан ID статьи' . "\r\n");
            throw $e;
        }

        $item = NewsModel::findOneByPk($id);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 