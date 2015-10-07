<?php

abstract class DB_Connector
{
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
            $dbh = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);
        }
        catch (PDOException $exception)
        {
            echo self::PDOException($exception, DISPLAY_TEXT);

            return FALSE;
        }

        return $dbh;
    }
}