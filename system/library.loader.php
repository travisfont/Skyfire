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

    // will load vendor library (from composer)
    public static function package($namespace)
    {
        require_once '/vender/'.$namespace.'/src/xxxx.php';

        return new load_as();
    }
}

class load_as
{
    public function __construct()
    {
        return $this;
    }

    public function as_($new_name) {}
}

// Autoloading
// http://php.net/manual/en/language.oop5.autoload.php