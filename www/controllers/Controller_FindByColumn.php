<?php

class Controller_FindByColumn
{
    public function actionFind()
    {
        $column = $_POST['column'];
        $values = $_POST['values'];
        $items = NewsModel::findByColumn($column, $values);
        $view = new View();
        $view->items = $items;
        $view->display('template_AllNews.php');
    }

} 