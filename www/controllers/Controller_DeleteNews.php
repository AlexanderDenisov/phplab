<?php


class Controller_DeleteNews
{
    public function actionDelete()
    {
        $item = new NewsModel();
        $this->id = $_POST['id'];
        $item->deleteNews();
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 