<?php


class News
    extends AbstractModel
{
    public $id;
    public $date;
    public $title;
    public $path;

    protected static $table = 'news';
    protected static $class = 'News';


} 