<?php
require_once __DIR__ . '/../models/News.php';

class AdminController {
    public function  actionAddNews() {
        $item = AddNews::addOneNews();
        include __DIR__ . '/../views/news/addform.php';
    }

    public function File_upload($field)
    {
        if (empty($_FILES))
            return false;
        if (0 != $_FILES[$field]['error'])
            return false;
        if (is_uploaded_file($_FILES[$field]['tmp_name'])) {
            $res = move_uploaded_file($_FILES[$field]['tmp_name'], __DIR__ . '/../news/' . $_FILES[$field]['name']);
            if (!$res) {
                return false;
            } else {
                return '/news/' . $_FILES[$field]['name'];
            }
        }
        return false;
    }
}
