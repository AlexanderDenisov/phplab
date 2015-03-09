<?php

class DB
{
    private $dbh;
    private $className = 'stdClass';


    public function __construct()
    {
        try {
            if (!$this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '')) {
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $e = new PDOException();
                throw $e;
            }
        } catch (PDOException $e) {
            $view = new View();
            error_log($view->error = $e->getMessage(), 3, __DIR__ . '/../errors.log');
            $view->display('/template_403.php');
            die;
        }
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function query($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
} 