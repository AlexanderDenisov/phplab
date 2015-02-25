<?php

abstract class AbstractAdminController {

    protected static $table;
    protected static $class;

    public static function addOneNews() {
        $db = new DB();
        return $db->addNews('INSERT INTO ' . static::$table . ' (date, title, path) VALUES (' . $data['date'] . '
        , ' . $data['title'] . ', ' . $data['newsfile'] . ')', static::$class);
    }


} 