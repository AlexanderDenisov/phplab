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
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    /*public function fill()
    {
        if (!empty($_POST)) {
            $data = [];
            if (!empty($_POST['title'])) {
                $this->data['title'] = $_POST['title'];
            }
            if (!empty($_POST['date'])) {
                $this->data['date'] = $_POST['date'];
            }
            if (!empty($_POST['text_news'])) {
                $this->data['text_news'] = $_POST['text_news'];
            }
        }
        if (isset($this->data['date']) && isset($this->data['title']) && isset($this->data['text_news'])) {
            $this->insert();
            echo 'Новость добавлена';
        } else {
            die;
        }

    }*/

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

    public static function findByColumn($column, $values)
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' LIKE "%' . $values . '%" LIMIT 0, 50 ';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);

    }

    public function deleteNews($id)
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->execute($sql, [':id' => $id]);
    }

}