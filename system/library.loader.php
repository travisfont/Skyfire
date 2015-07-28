<?php

class extender
{
    public function func($function_name)
    {
        /// load the seperate function
    }
}

// System Autoloader
class load
{
    public static function library($class)
    {
        require_once '/library/'.strtolower($class).'.class.php';

        return new extender();
    }

    public static function service($class)
    {
        require_once '/library/services/'.strtolower($class).'.php';
    }
}

// Autoloading
// http://php.net/manual/en/language.oop5.autoload.php