<?php

class load
{
    public static function library($class)
    {
        require_once '/library/'.strtolower($class).'.class.php';
    }

    public static function service($class)
    {
        require_once '/library/services/'.strtolower($class).'.php';
    }
}