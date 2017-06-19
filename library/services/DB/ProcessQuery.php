<?php

class ProcessQuery extends DB_Connector
{
    private $sql_file;
    private $sql_type;
    private $inject_vars;

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
        if (empty($params))
        {
            return (string) $query;
        }

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

        return (string) preg_replace($keys, $values, $query, 1, $count);
    }

    // replace any non-ascii character with its hex code - supports multi-byte characters
    private function escape($value)
    {
        $return = '';

        for ($i = 0; $i < strlen($value); ++$i)
        {
            $char = $value[$i];
            $ord  = ord($char);

            if ($char !== "'" && $char !== "\"" && $char !== '\\' && $ord >= 32 && $ord <= 126)
            {
                $return .= $char;
            }
            else
            {
                $return .= '\\x' . dechex($ord);
            }

        }

        return (string) $return;
    }

    public function __construct($sql_file = NULL, $sql_type = NULL, DB $dbh)
    {
        $this->sql_file = $sql_file;
        $this->sql_type = $sql_type;

        if ($this->dbh == NULL)
        {
            $this->dbh = $dbh;
        }
    }

    public function inject($parameters)
    {
        $this->inject_vars = $parameters;

        return $this;
    }

    public function prepare(array $parameters)
    {
        try
        {
            if ($this->sql_type == 'select')
            {
                $query = Stash::getQuery($this->sql_file, $this->sql_type);

                if (!empty($this->inject_vars))
                {
                    foreach ($this->inject_vars as $var => $value)
                    {
                        //$value = strip_tags(stripslashes($this->escape($value)));
                        $value = strip_tags(stripslashes($value));
                        //$value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
                        $query = str_replace('$'.$var, $value, $query);
                    }
                }

                $stmt = $this->dbh->dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

                if (!$stmt)
                {
                    echo "\nPDO::errorInfo():\n";
                    print_r($this->dbh->dbh->errorInfo());

                    return FALSE;
                }
                else
                {
                    // TODO: THIS NEEDS TO BE TESTED
                    foreach ($parameters as $key => $element)
                    {
                        switch (TRUE)
                        {
                            case is_int($element):
                                $param = PDO::PARAM_INT;
                                break;
                            case is_bool($element):
                                $param = PDO::PARAM_BOOL;
                                break;
                            case is_null($element):
                                $param = PDO::PARAM_NULL;
                                break;
                            default:
                                $param = PDO::PARAM_STR;
                                break;
                        }

                        $stmt->bindValue(sprintf(':%s', $key), $element, $param);
                    }

                    //if ($stmt->execute($parameters))
                    if ($stmt->execute())
                    {
                        //return $stmt->fetchAll(PDO::FETCH_CLASS);
                        $data = array();

                        foreach (new LastIterator(new DbRowIterator($stmt)) as $row)
                        {
                            $data[] = $row;
                        }

                        $stmt->closeCursor();  // closing
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
            }
            else
            {
                $query = Stash::getQuery($this->sql_file, $this->sql_type);

                if (!empty($this->inject_vars))
                {
                    foreach ($this->inject_vars as $var => $value)
                    {
                        //$value = strip_tags(stripslashes($this->escape($value)));
                        $value = strip_tags(stripslashes($value));
                        //$value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
                        $query = str_replace('$'.$var, $value, $query);
                    }
                }

                try
                {
                            $this->dbh->dbh->beginTransaction();
                    $stmt = $this->dbh->dbh->prepare($query);

                    if (!$stmt)
                    {
                        echo "\nPDO::errorInfo():\n";
                        print_r($this->dbh->dbh->errorInfo());

                        return FALSE;
                    }
                    else
                    {
                        if ($exec = $stmt->execute($parameters))
                        {
                            if ($this->sql_type == 'insert' && $exec === TRUE)
                            {
                                $lastInsertId = $this->dbh->dbh->lastInsertId();
                            }

                            $stmt->closeCursor();
                            $this->dbh->dbh->commit();

                            if (isset($lastInsertId))
                            {
                                $stmt = NULL; // closing

                                return $lastInsertId;
                            }
                            else
                            {
                                if ($this->sql_type == 'update')
                                {
                                    $rowCount = $stmt->rowCount();
                                    $stmt     = NULL; // closing

                                    return $rowCount;
                                }
                                else
                                {
                                    $stmt = NULL; // closing

                                    return $exec;
                                }
                            }
                        }
                        else
                        {
                            echo "\nPDO::errorInfo():\n";
                            print_r($this->dbh->dbh->errorInfo());

                            $stmt = NULL; // closing

                            return FALSE;
                        }
                    }

                }
                catch (PDOException $e)
                {
                    $this->dbh->dbh->rollBack();

                    return $e->getMessage();
                }

            }
        }
        catch (PDOException $exception)
        {
            echo $this->PDOException($exception, self::DISPLAY_TEXT);
        }
    }

    // prints the query string in plain text
    public function text($parameters = FALSE)
    {
        $query = Stash::getQuery($this->sql_file, $this->sql_type, TRUE);

        if (!empty($this->inject_vars))
        {
            foreach ($this->inject_vars as $var => $value)
            {
                //$value = strip_tags(stripslashes($this->escape($value)));
                $value = strip_tags(stripslashes($value));
                //$value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
                $query = str_replace('$'.$var, $value, $query);
            }
        }

        return $this->interpolateQuery($query, $parameters);
    }

    // plain queries without any prepare data
    public function execute()
    {
        try
        {
            $query = Stash::getQuery($this->sql_file, $this->sql_type);

            if (!empty($this->inject_vars))
            {
                foreach ($this->inject_vars as $var => $value)
                {
                    //$value = strip_tags(stripslashes($this->escape($value)));
                    $value = strip_tags(stripslashes($value));
                    //$value = html_entity_decode($value, ENT_COMPAT, 'UTF-8');
                    $query = str_replace('$'.$var, $value, $query);
                }
            }

            $stmt = $this->dbh->dbh->prepare($query, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));

            if ($stmt->execute())
            {
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
            echo self::PDOException($exception, self::DISPLAY_TEXT);
        }
    }
}
