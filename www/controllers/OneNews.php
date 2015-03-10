<?php

namespace Application\Controllers;
use Application\Models\News;

class OneNews
{

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::findOneByPk($id);
        if (empty($item)) {
            $e = new \E404Exception(date('d.m.Y H:i:s') . ' Статья с ID ' . $id . ' удалена или перемещена' . "\r\n");
            throw $e;
        }
        $view = new \View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }
} 