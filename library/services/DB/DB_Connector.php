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
      private static $charset = 'utf8';

    protected static function PDOException(PDOException $exception, $display_type)
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

    protected static function connect()
    {
        try
        {
            $dbh = new PDO('mysql:host='.self::$DATABASE_HOST.';dbname='.self::$DATABASE_NAME.';charset='.self::$charset, self::$DATABASE_USER, self::$DATABASE_PASSWORD);
            //$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, self::DISPLAY_TEXT);

            return FALSE;
        }

        return $dbh;
    }

    public static function define($name, $value)
    {
        switch ($name)
        {
            case 'stash_dir':
                Stash::$stash_dir = $value;
                break;
            case 'host':
                self::$DATABASE_HOST = $value;
                break;
            case 'dbname':
                self::$DATABASE_NAME = $value;
                break;
            case 'dbuser':
                self::$DATABASE_USER = $value;
                break;
            case 'dbpassword':
                self::$DATABASE_PASSWORD = $value;
                break;
            case 'charset':
                self::$charset  = $value;
                break;
        }
    }
}