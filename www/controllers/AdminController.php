<?php
require_once __DIR__ . '/../models/AddNews.php';

class AdminController {

    public function  actionAdd() {
        $items = AddNews::addOneNews();
       // include __DIR__ . '/../views/news/addform.php';
    }

}
