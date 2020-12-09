<?php

class Model
{
    protected $DB;
    private static $instance;

    public static function __callStatic($function, $arguments)
    {
        // avoid cap errors
        if (strtolower($function) == strtolower(get_called_class()))
        {
            // call the constructor from an instance
            if (is_null(self::$instance))
            {
                self::$instance = new self();
            }

            // returns a new DB connection
            return self::$instance;
        }
    }

    protected function __construct()
    {
        load::service('DB');

        // calling a connector class into an instance
        if (is_null($this->DB))
        {
            $this->DB = new DB;
        }

        // returning the connector class self::DB
        return $this;
    }
}
