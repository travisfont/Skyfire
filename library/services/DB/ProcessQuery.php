<?php

class ProcessQuery extends DB_Connector
{
    private $sql_file;
    private $sql_type;

    /**
     * Replaces any parameter placeholders in a query with the value of that
     * parameter. Useful for debugging. Assumes anonymous parameters from
     * $params are are in the same order as specified in $query
     *
     * @param   string  $query  The sql query with parameter placeholders
     * @param    array  $params The array of substitution parameters
     * @return  string          The interpolated query
     */
    private function interpolateQuery($query, $params)
    {
        $keys   = array();
        $values = $params;

        # build a regular expression for each parameter
        foreach ($params as $key => $value)
        {
            if (is_string($key))
            {
                $keys[] = '/:'.$key.'/';
            }
            else
            {
                $keys[] = '/[?]/';
            }

            if (is_array($value))
            {
                $values[$key] = implode(',', $value);
            }

            if (is_null($value))
            {
                $values[$key] = 'NULL';
            }
        }

        // Walk the array to see if we can add single-quotes to strings
        array_walk($values, create_function('&$v, $k', 'if (!is_numeric($v) && $v!="NULL") $v = "\'".$v."\'";'));

        return preg_replace($keys, $values, $query, 1, $count);
    }

    public function __construct($sql_file, $sql_type)
    {
        $this->sql_file = $sql_file;
        $this->sql_type = $sql_type;
    }

    public function prepare($parameters)
    {
        try
        {
            // checking and establish a live db connector
            if (empty(self::$db))
            {
                self::$db = self::connect();
            }

            if ($this->sql_type == 'select')
            {
                $stmt = self::$db->prepare(Stash::getQuery($this->sql_file, $this->sql_type), array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

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
            else
            {
                #self::$db->beginTransaction();
                #try { // prepare + execute here
                #self::$db->commit(); } catch (PDOException $e) {
                #return $e->getMessage(); }

                $stmt = self::$db->prepare(Stash::getQuery($this->sql_file, $this->sql_type));
                $exec = $stmt->execute($parameters);
                        $stmt->closeCursor();

                return $exec;
                //return $stmt->rowCount();
            }
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, self::DISPLAY_TEXT);
        }
    }

    // prints the query string in plain text
    public function text($parameters = FALSE)
    {
        return $this->interpolateQuery(Stash::getQuery($this->sql_file, $this->sql_type), $parameters);
    }

    // plain queries without any prepare data
    public function execute()
    {
        try
        {
            // checking and establish a live db connector
            if (empty(self::$db))
            {
                self::$db = self::connect();
            }

            $stmt = self::$db->prepare(Stash::getQuery($this->sql_file, $this->sql_type), array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

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
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, self::DISPLAY_TEXT);
        }
    }
}