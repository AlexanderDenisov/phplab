<?php

class Controller_FindByColumn
{
    public function actionFind()
    {
        $item = NewsModel::findByColumn($_POST['column'], $_POST['values']);

        if (empty($item)) {
            $e = new E404Exception(date('d.m.Y H:i:s') . ' Поиск статьи по ' . $_POST['column'] . ' = ' . $_POST['values'] . ' результатов не дал.' . "\r\n");
            throw $e;
        }


        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 