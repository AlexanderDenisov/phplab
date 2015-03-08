<?php

class Controller_FindByColumn
{
    public function actionFind()
    {
        $item = NewsModel::findByColumn($_POST['column'], $_POST['values']);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 