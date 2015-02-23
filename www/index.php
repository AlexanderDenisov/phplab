<?php

class Database
    {

    public function __construct($host, $user, $password, $base)
    {
        $this->db = mysql_connect($host, $user, $password);
        $this->db = mysql_select_db($base);
    }
    public function query($sql)
    {
        $result = mysql_query($sql);
        $data = [];
         while(false !== ($row = mysql_fetch_assoc($result))) {
             $data[] = $row;
         } return $data;
    }
    public function exec($sql)
    {
        $result = mysql_query($sql);
        return $result;
    }
    public function select()
    {
        $sql = 'SELECT * FROM news';
        return $this->query($sql);
    }
    public function insert()
    {
        $sql = 'INSERT INTO news (id, date, title, path) VALUES (NULL, \'22.02.2015\', \'Привет лунатикам\', \'\')';
        return $this->exec($sql);
    }
    public function delete()
    {
        $sql = 'DELETE FROM news WHERE title=\'Привет лунатикам\'';
        return $this->exec($sql);
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
