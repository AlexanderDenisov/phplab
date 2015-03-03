<?php


abstract class AbstractModel
    //implements IModel
{
    static protected $table;
    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        return $this->data[$k];
    }

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public function fill()
    {
        if (!empty($_POST)) {
            $data = [];
            if (!empty($_POST['title'])) {
                $data['title'] = $_POST['title'];
            }
            if (!empty($_POST['date'])) {
                $data['date'] = $_POST['date'];
            }
            if (!empty($_POST['text_news'])) {
                $data['text_news'] = $_POST['text_news'];
            } $this->insert();
        } else {
            echo 'Нет данных';
            die;
        }
    }

    public static function findOneByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id' => $id])[0];
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];

        foreach ($cols as $col) {
            $data[':' . $col] = $this->data[$col];
        }

        $sql = 'INSERT INTO ' . static::$table . '
         (' . implode(', ', $cols) . ')
         VALUES
         (' . implode(', ', array_keys($data)) . ')
         ';

        $db = new DB();
        $db->execute($sql, $data);

    }

}


/*{

    protected static $table;
    protected static $class;

    public static function getAll()
    {
        $db = new DB();
        return $db->queryAll('SELECT * FROM ' . static::$table . ' ORDER by id DESC', static::$class);
    }

    public static function getOne($id)
    {
        $db = new DB();
        return $db->queryOne('SELECT * FROM ' . static::$table . ' WHERE id=' . $id, static::$class);
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
            if (!empty($_POST['text_news'])) {
                $data['text_news'] = $_POST['text_news'];
            }
        }
        if (isset($data['date']) && isset($data['title']) && isset($data['text_news'])) {
            $data_date = $data['date'];
            $data_title = $data['title'];
            $data_text_news = $data['text_news'];
            $db = new DB();
            $sql = $db->addNews('INSERT INTO news (id, date, title, text_news) VALUES
(NULL, "' . $data_date . '", "' . $data_title . '", "' . $data_text_news . '")', static::$class);
            die;
        }

    }
}*/