<?php

class extender
{
    private $class;
    private $function;

    public function __construct($class)
    {
        $this->class    = $class;
        $this->function = NULL;
    }

    public function func($function_name)
    {
        $this->function = $function_name;

        // load the seperate function
        if (is_file(PARENT_DIRECTORY.'/library/functions/'.strtolower($this->class).'/'.$function_name.'.func.php'))
        {
            if (!function_exists($function_name))
            {
                require_once PARENT_DIRECTORY.'/library/functions/'.strtolower($this->class).'/'.$function_name.'.func.php';
            }
        }
    }

    public function __destruct()
    {
        // a seperate function was set and was never unset
        if (empty($this->function))
        {
            //$class = $this->class;
            spl_autoload_register(function ($class)
            {
                // grouped alias of classes (special class names within a class)
                if ($class == 'ExecuteTime') $class = 'Debug';

                // camel case library checker
                if (defined('CAMEL_CASE') && CAMEL_CASE == '1')
                {
                    $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/classes/camelcase/'.strtolower($class).'.class.php';
                }
                else
                {
                    $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/classes/'.strtolower($class).'.class.php';
                }

                if (is_readable($filename))
                {
                    require_once $filename;
                }
            },
            TRUE, TRUE);
        }
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
        /*  // HAD THIS ON BEFORE
        spl_autoload_register(function ($class)
        {
            // grouped alias of classes (special class names within a class)
            if ($class == 'ExecuteTime') $class = 'Debug';

            //$filename = PARENT_DIRECTORY.'/library/'.strtolower($class).'.class.php';
            $filename = __DIR__.DIRECTORY_SEPARATOR.'../library/classes/'.strtolower($class).'.class.php';
            if (is_readable($filename))
            {
                require_once $filename;
            }
        }, TRUE, TRUE);
        */

        return new extender($class);
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

    public static function cache()
    {
        return new cacher();
    }
}

// quick cache - super fast internal cacher
// This method is faster than Redis, Memcache, APC, and other PHP caching solutions.
// They all must first serialize and unserialize objects, generally using PHP’s serialize or json_encode functions.
// By storing PHP objects in file cache memory across requests, this method avoids serialization completely!
class cacher
{
    public function set($key, $val)
    {
        $val = var_export($val, TRUE);

        // HHVM fails at __set_state, so just use object cast for now
        file_put_contents('/system/tmp/'.$key, '<?php $val = '.str_replace('stdClass::__set_state', '(object)', $val).';');
    }

    public function get($key)
    {
        @include '/system/tmp/'.$key;

        return isset($val) ? $val : FALSE;
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