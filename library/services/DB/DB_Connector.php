<?php

abstract class DB_Connector
{
            const DISPLAY_JSON  = 1000;
            const DISPLAY_ARRAY = 2000;
            const DISPLAY_TEXT  = 3000;

    public static $DATABASE_HOST;
    public static $DATABASE_NAME;
    public static $DATABASE_USER;
    public static $DATABASE_PASSWORD;

    // Database connector
    protected static $db;
    protected static $cc         = 0;
    protected static $charset    = 'utf8';
    protected static $persistent = FALSE;
    protected static $errmode    = TRUE;

    protected $dbh;

    protected function PDOException(PDOException $exception, $display_type)
    {
        switch ($display_type)
        {
            case 1000:
                return json_encode(array('status' => 'PDOException', 'message' => $exception->getMessage()));
            case 2000:
                return array('status' => 'PDOException', 'message' => $exception->getMessage());
            case 3000:
                return 'PDOException: '.$exception->getMessage();
        }

        return FALSE;
    }

    protected function connect()
    {
        try
        {
            if (self::$persistent === TRUE)
            {
                $this->dbh = new PDO('mysql:host='.self::$DATABASE_HOST.';dbname='.self::$DATABASE_NAME.';charset='.self::$charset, self::$DATABASE_USER, self::$DATABASE_PASSWORD, array(PDO::ATTR_PERSISTENT => TRUE, PDO::MYSQL_ATTR_FOUND_ROWS => TRUE));
            }
            else
            {
                $this->dbh = new PDO('mysql:host='.self::$DATABASE_HOST.';dbname='.self::$DATABASE_NAME.';charset='.self::$charset, self::$DATABASE_USER, self::$DATABASE_PASSWORD, array(PDO::MYSQL_ATTR_FOUND_ROWS => TRUE));
            }

            if (self::$errmode === TRUE)
            {
                $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, self::DISPLAY_TEXT);

            return FALSE;
        }

        return $this->dbh;
    }

    public static function define($name, $value)
    {
        switch (strtoupper($name))
        {
            case 'STASH_DIR':
                Stash::$stash_dir = $value;
                break;
            case 'HOST':
                self::$DATABASE_HOST = $value;
                break;
            case 'DBNAME':
                self::$DATABASE_NAME = $value;
                break;
            case 'DBUSER':
                self::$DATABASE_USER = $value;
                break;
            case 'DBPASSWORD':
                self::$DATABASE_PASSWORD = $value;
                break;
            case 'CHARSET':
                self::$charset  = $value;
                break;
            case 'PERSISTENT':
                if ($value === TRUE || strtoupper(trim($value)) == 'YES')
                {
                    self::$persistent  = TRUE;
                }
                break;
        }
    }
    
    // creates database if not existing
    public static function createNotExist($database_name, $exception_type = self::DISPLAY_TEXT)
    {
        $database_name = trim($database_name);

        if (!empty($database_name))
        {
            try
            {
                $dbh = new PDO('mysql:host='.self::$DATABASE_HOST.';charset='.self::$charset, self::$DATABASE_USER, self::$DATABASE_PASSWORD, array(PDO::MYSQL_ATTR_FOUND_ROWS => TRUE));

                if (self::$errmode === TRUE)
                {
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }

                return (bool) $dbh->exec('CREATE DATABASE IF NOT EXISTS '.$database_name.';') || die (function ($dbh) use ($exception_type)
                {
                         switch ($exception_type)
                         {
                             case 1000:
                                 echo json_encode(array('status' => 'PDOException', 'message' => $dbh->errorInfo()));
                                 return NULL;
                             case 2000:
                                 echo array('status' => 'PDOException', 'message' => $dbh->errorInfo());
                                 return NULL;
                             case 3000:
                                 echo 'PDOException: '.$dbh->errorInfo();
                                 return NULL;
                         }
                });
            }
            catch (PDOException $exception)
            {
                switch ($exception_type)
                {
                    case 1000:
                        echo json_encode(array('status' => 'PDOException', 'message' => $exception->getMessage()));
                        return FALSE;
                    case 2000:
                        echo array('status' => 'PDOException', 'message' => $exception->getMessage());
                        return FALSE;
                    case 3000:
                        echo 'PDOException: '.$exception->getMessage();
                        return FALSE;
                }
            }
        }
        else
        {
            die ('DB::createNotExist($name) - $name is not valid or empty.');

        }

        return FALSE;
    }
    
    public static function createQueryDirectories()
    {
        $handle = FALSE;

        foreach (Stash::query_types as $type)
        {
            if (!is_dir(Stash::$stash_dir.'/queries/'.$type))
            {
                if (mkdir(Stash::$stash_dir.'/queries/'.$type, 0755, TRUE))
                {
                    if ($handle === FALSE)
                    {
                        $handle = 1;
                    }
                    else
                    {
                        ++$handle;
                    }
                }
            }
        }

        return $handle;
    }
}
