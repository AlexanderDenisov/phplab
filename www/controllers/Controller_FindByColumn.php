<?php

class Controller_FindByColumn
{
    public function actionFind()
    {
        $column = $_POST['column'];
        $values = $_POST['values'];
        $item = NewsModel::findByColumn($column, $values);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 