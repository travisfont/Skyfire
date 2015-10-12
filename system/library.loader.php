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
    // can i turn this into private?
    /*
    public static function __callStatic($service, $arguments)
    {
        // ONLY allow calls within self 'load' class
        if (get_called_class() == 'load')
        {
            // class alias (conversion to locate folder)
            $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/services/'.trim($service).'/index.php';
            if (is_readable($filename))
            {
                require_once $filename;
            }
        }
    }
    */

    public static function library($class)
    {

        spl_autoload_register(function ($class)
        {
            //$filename = PARENT_DIRECTORY.'/library/'.strtolower($class).'.class.php';
            $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/classes/'.strtolower($class).'.class.php';
            if (is_readable($filename))
            {
                require_once $filename;
            }
        }, TRUE, TRUE);
        //});

        return new extender();
    }

    // scan for a folder name and searches for skyfire.index.php
    // if not found then it will search for index.php
    // if not found then it will search for folder name again as file.php
    // if not load error will return
    public static function service($class)
    {
        // if the service is loaded AND the class is called
        //spl_autoload_register('self::'.$class, TRUE, TRUE);
        spl_autoload_register(function ($service) use ($class)
        {
            // class alias (conversion to locate folder)
            $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/services/'.trim($class).'/index.php';
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