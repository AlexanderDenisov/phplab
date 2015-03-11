<?php

namespace Application\Classes;


interface IModel
{
    public function __set($k, $v);

    public function __get($k);

    public function __isset($k);

    public static function findAll();

    public static function findOneByPk($id);

    public static function findByColumn($column, $values);

    public function deleteNews();

    public function save();
}