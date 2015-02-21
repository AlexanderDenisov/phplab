<?php

class Database {
    private $db = null;
    private $result = null;
    public function __construct($host, $user, $password, $base)
    {
        $this->db = new mysqli($host, $user, $password, $base);
        //$this->db = mysql_select_db($base);
    }
    public function query($query)
    {
        $this->result = $this->db->query($query);
         while(false !== ($row = $this->result->fetch_array())) {
             $data[] = $row;
             return $data;
         }
    }
}

$db = new Database('localhost', 'root', '', 'test');
$data = $db->query('SELECT * FROM news');
var_dump($data);