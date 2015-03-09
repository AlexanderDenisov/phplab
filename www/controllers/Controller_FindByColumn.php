<?php

class Controller_FindByColumn
{
    public function actionFind()
    {
        //try {
            $item = NewsModel::findByColumn($_POST['column'], $_POST['values']);
        /*} catch (ModelException $e) {
            die ('Что-то пошло не так.');
        }*/
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 