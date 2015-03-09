<?php


abstract class AbstractModel
    implements IModel
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

    public function __isset($k)
    {
        return isset($this->data[$k]);
    }

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' ORDER BY id DESC';
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOneByPk($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id' => $id])[0];
    }

    protected function insert()
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
        $this->id = $db->lastInsertId();
    }

    public static function findByColumn($column, $values)
    {
        $db = new DB();
        $db->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' =:values LIMIT 0, 50 ';
        $res = $db->query($sql, [':values' => $values]);

        if (empty($res)) {
            $e = new ModelException('Ничего не найдено');
            throw $e;
        }

        /*if (!empty($res)) {
            return $res[0];
        } else {*/
            return $res[0];
        }

    public function deleteNews()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';
        $db = new DB();
        $db->execute($sql, [':id' => $this->id]);
    }

    protected function update()
    {
        $cols = [];
        $data = [];
        foreach ($this->data as $k => $v) {
            $data[':' . $k] = $v;
            if ('id' == $k) {
                continue;
            }
            $cols[] = $k . '=:' . $k;
        }
        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $cols) . ' WHERE id=:id';
        $db = new DB();
        $db->execute($sql, $data);
    }

    public function save()
    {
        if(!isset($this->id)) {
            $this->insert();
        } else {
            $this->update();
        }
    }
}