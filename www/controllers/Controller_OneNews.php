<?php
//require_once __DIR__ . '/../models/News.php';


class Controller_OneNews {

    public function actionOne() {
        $id = $_GET['id'];
        $item = News::getOne($id);
        $view = new View();
        //$view->assign('item', $item);
        $view->item = $item;
        $view->display('news/template_OneNews.php');
        //include __DIR__ . '/../views/news/template_view.php';
    }

} 