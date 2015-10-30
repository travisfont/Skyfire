<?php

class ProcessCUD extends DB_Connector
{
    private $table_name;

    function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __construct($table_name)
    {
        $this->table_name = $table_name;
    }

    public function create()
    {

    }

    public function update($statement)
    {

    }

    public function delete($statement)
    {

    }

    public function softdelete($statement, $timestamp_field)
    {

    }
}