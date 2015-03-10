<?php

namespace Application\Controllers;
use Application\Models\News;

class FindByColumn
{
    public function actionFind()
    {
        $item = News::findByColumn($_POST['column'], $_POST['values']);
        if (empty($item))
        {
            $e = new \E404Exception(date('d.m.Y H:i:s') . ' Поиск статьи результатов не дал.' . "\r\n");
            throw $e;
        }
        $view = new \View();
        $view->item = $item;
        $view->display('template_OneNews.php');
    }

} 