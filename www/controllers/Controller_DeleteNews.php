<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 05.03.2015
 * Time: 1:51
 */

class Controller_DeleteNews
{
    public function actionDelete()
    {
        $id = $_GET['id'];
        $item = new NewsModel();
        $item = NewsModel::deleteNews($id);
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 