<?php

namespace Application\Controllers;
use Application\Models\News;

class DeleteNews
{
    public function actionDelete()
    {
        $item = new News();
        $item->id = $_GET['id'];
        $item->deleteNews();
        $view = new \View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 