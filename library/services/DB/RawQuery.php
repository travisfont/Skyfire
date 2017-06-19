<?php

class RawQuery extends DB_Connector
{
    private $statement;
    private $parameters;

    public function __construct($statement, $parameters = NULL, DB $dbh)
    {
        $this->statement  = $statement;

        if (!empty($parameters))
        {
            $this->parameters = $parameters;
        }

        if ($this->dbh == NULL)
        {
            $this->dbh = $dbh;
        }
    }

    public function execute()
    {
        try
        {
            $stmt = $this->dbh->dbh->prepare($this->statement, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

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

                $stmt->closeCursor(); // closing
                $stmt = NULL;

                return $data;
            }
            else
            {
                echo "\nPDO::errorInfo():\n";
                print_r($this->dbh->dbh->errorInfo());

                $stmt = NULL; // closing

                return FALSE;
            }
        }
        catch (PDOException $exception)
        {
            echo $this->PDOException($exception, self::DISPLAY_TEXT);
        }
    }
}
