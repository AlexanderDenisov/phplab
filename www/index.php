<?php

class Database
    {
    private $db = NULL;
    private $result = NULL;
    private $data = NULL;
    private $row = NULL;
    private $sql = NULL;
    public function __construct($host, $user, $password, $base)
    {
        $this->db = mysql_connect($host, $user, $password);
        $this->db = mysql_select_db($base);
    }
    public function query($sql)
    {
        $this->result = mysql_query($sql);
         while(false !== ($this->row = mysql_fetch_assoc($this->result))) {
             $this->data[] = $this->row;
         } return $this->data;
    }
    public function exec($sql)
    {
        $this->result = mysql_query($this->sql);
        return $this->result;
    }
    public function select()
    {
        $this->sql = 'SELECT * FROM news';
        return $this->query($this->sql);
    }
    public function insert()
    {
        $this->sql = 'INSERT INTO news (id, date, title, path) VALUES (NULL, \'22.02.2015\', \'Привет лунатикам\', \'\')';
        return $this->exec($this->sql);
    }
    public function delete()
    {
        $this->sql = 'DELETE FROM news WHERE title=\'Привет лунатикам\'';
        return $this->exec($this->sql);
    }
}

$db = new Database('localhost', 'root', '', 'test');
$data = $db->query('SELECT * FROM news');
var_dump($data);

echo '<BR>';
echo '<BR>';
echo '<BR>';

$db2 = new Database('localhost', 'root', '', 'test');
$data2 = $db2->select();
var_dump($data2);

echo '<BR>';
echo '<BR>';
echo '<BR>';

$db3 = new Database('localhost', 'root', '', 'test');
$data3 = $db3->insert();
var_dump($data3);

echo '<BR>';
echo '<BR>';
echo '<BR>';

$db4 = new Database('localhost', 'root', '', 'test');
$data4 = $db4->delete();
var_dump($data4);
