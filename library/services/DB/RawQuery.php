<?php

class RawQuery extends DB_Connector
{
    private $statement;
    private $parameters;

    public function __construct($statement, $parameters = NULL)
    {
        $this->statement  = $statement;

        if (!empty($parameters))
        {
            $this->parameters = $parameters;
        }
    }

    public function execute()
    {
        try
        {
            // checking and establish a live db connector
            if (empty($this->dbh))
            {
                self::$db = $this->connect();
            }

            $stmt = self::$db->prepare($this->statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            if ($stmt->execute($this->parameters))
            {
                // allow multiple queries
                if (strlen(strstr($this->statement, ';')) > 1)
                {
                    $stmt->nextRowset();
                }

                //return $stmt->fetchAll(PDO::FETCH_CLASS);
                $data = array();
                foreach (new LastIterator(new DbRowIterator($stmt)) as $row)
                {
                    $data[] = $row;
                }

                return $data;
            }
        }
        catch (PDOException $exception)
        {
            echo $this->PDOException($exception, self::DISPLAY_TEXT);
        }
    }
}
