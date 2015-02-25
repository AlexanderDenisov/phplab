<?php
require_once __DIR__ . '/../classes/DB.php';

class AddNews
    extends AbstractAdminController
{
    public $id;
    public $date;
    public $title;
    public $newsfile;

    protected static $table = 'news';
    protected static $class = 'AddNews';

}