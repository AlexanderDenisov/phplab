<?php


interface IModel
{
    public static function getAll ();
    public static function getOne ($id);
    public static function File_upload($field);
    public static function addOneNews();
} 