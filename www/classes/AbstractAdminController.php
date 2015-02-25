<?php

abstract class AbstractAdminController
{

    protected static $table;
    protected static $class;


    public static function File_upload($field)
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

    public static function addOneNews()
    {

        if (!empty($_POST)) {
            $data = [];
            if (!empty($_POST['title'])) {
                $data['title'] = $_POST['title'];
            }
            if (!empty($_POST['date'])) {
                $data['date'] = $_POST['date'];
            }
            if (!empty($_FILES)) {
                $res = self::File_upload('path');
                if (false !== $res) {
                    $data['path'] = $res;
                }
            }
        }
        if (isset($data['date']) && isset($data['title']) && isset($data['path'])) {
            $db = new DB();
            return $db->addNews("INSERT INTO news
	(date, title, path)
	VALUES
	('" . $data['date'] . "','" . $data['title'] . "', '" . $data['path'] . "')", static::$class);
            header('Location: /index.php');
            die;
        }
    }
}

