<?php
/**
 * Created by PhpStorm.
 * User: Кирилл
 * Date: 03.03.2015
 * Time: 23:15
 */

class NewsModel
    extends AbstractModel
{
    protected static $table = 'news';

    public $id;
    public $title;
    public $text_news;


} 