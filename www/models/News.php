<?php

namespace Application\Models;
use Application\Classes\AbstractModel;

/**
 * Class News
 * @property $id;
 * @property $title;
 * @propert $date;
 * @property $text_news;
 */
class News
    extends AbstractModel
{
    protected static $table = 'news';

}

?>