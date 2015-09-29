<?php

class extender
{
    public function func($function_name)
    {
        // load the seperate function and unset the class object
    }
}

// System Autoloader
class load
{
    public static function library($class)
    {

        spl_autoload_register(function ($class)
        {
            //$filename = PARENT_DIRECTORY.'/library/'.strtolower($class).'.class.php';
            $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'../library/'.strtolower($class).'.class.php';
            if (is_readable($filename))
            {
                require_once $filename;
            }
        }, TRUE, TRUE);

        return new extender();
    }

    // scan for a folder name and searches for skyfire.index.php
    // if not found then it will search for index.php
    // if not found then it will search for folder name again as file.php
    // if not load error will return
    public static function service($class)
    {
        spl_autoload_register(function ($class)
        {
            //$filename = PARENT_DIRECTORY.'/library/services/'.trim($class).'/index.php';
            $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'../library/services/'.trim($class).'/index.php';
            if (is_readable($filename))
            {
                require_once $filename;
            }
        }, TRUE, TRUE);
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

    public function use_as($new_name) {}
}

// Autoloading
// http://php.net/manual/en/language.oop5.autoload.php