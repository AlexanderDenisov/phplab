<?php

namespace Application\Controllers;
use Application\Models\News;
use Application\Classes\View;

class DeleteNews
{
    public function actionDelete()
    {
        $item = new News();
        $item->id = $_GET['id'];
        $item->deleteNews();
        $view = new View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 