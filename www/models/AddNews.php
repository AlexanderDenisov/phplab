<?php
require_once __DIR__ . '/../classes/DB.php';

class AddNews
    extends AbstractAdminController
{

    public $date;
    public $title;
    public $path;

    protected static $table = 'news';
    protected static $class = 'Add';

}