<?php

class ProcessQuery extends DB_Connector
{
    private $sql_file;
    private $sql_type;

    public function __construct($sql_file, $sql_type)
    {
        $this->sql_file = $sql_file;
        $this->sql_type = $sql_type;
    }

    public function prepare($parameters)
    {
        try
        {
            if ($db = self::connect())
            {
                $stmt = $db->prepare(Stash::getQuery($this->sql_file, $this->sql_type), array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

                if ($stmt->execute($parameters))
                {
                    //return $stmt->fetchAll(PDO::FETCH_CLASS);
                    $data = array();
                    foreach (new LastIterator(new DbRowIterator($stmt)) as $row)
                    {
                        $data[] = $row;
                    }

                    return $data;
                }
            }
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, DISPLAY_TEXT);
        }
    }

    // prints the query string in plain text
    public function text() {}

    // plain queries without any prepare data
    public function execute()
    {
        try
        {
            if ($db = self::connect())
            {
                $stmt = $db->prepare(Stash::getQuery($this->sql_file, $this->sql_type), array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

                if ($stmt->execute())
                {
                    //return $stmt->fetchAll(PDO::FETCH_CLASS);
                    $data = array();
                    foreach (new LastIterator(new DbRowIterator($stmt)) as $row)
                    {
                        $data[] = $row;
                    }

                    return $data;
                }

            }
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, DISPLAY_TEXT);
        }
    }
}