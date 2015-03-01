<?php


class MyIterator
    implements Iterator
{
    private $position = 0;
    private $data = [];

    public function __construct()
    {
        $this->position = 0;
    }

    function rewind()
    {
        //var_dump(__METHOD__);
        $this->position = 0;
    }

    function current()
    {
        //var_dump(__METHOD__);
        return $this->data[$this->position];
    }

    function key()
    {
        //var_dump(__METHOD__);
        return $this->position;
    }

    function next()
    {
        //var_dump(__METHOD__);
        ++$this->position;
    }

    function valid()
    {
        //var_dump(__METHOD__);
        return isset($this->data[$this->position]);
    }
}