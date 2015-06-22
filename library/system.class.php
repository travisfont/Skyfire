<?php 

/* Main Skyfire System Library */

class System
{
    public static function __callStatic($function, $arguments)
    {
        $class = get_called_class();
        require_once 'functions/'.strtolower($class).'/'.$function.'.func.php';
        $instance = new $class();

        if (count($arguments) > 0)
        {
            return $instance->$function(implode(',', $arguments));
        }
        else
        {
            return $instance->$function();
        }
    }

    /*
    * 
    * Check if a value is empty (...) if so then replaces with an empty string by default
    * or define set variable in the second parameter.
    */
    static public function is_notset($var, $default = '')
    {
        return empty($var) ? $default : $var;
    }
    
    static public function includeIfExist($path){}
    static public function includ_onceIfExist($path){}
    static public function requireIfExist($path){}
    static public function require_onceIfExist($path){}
}



/* Examples:
-------------

System::is_notset(post::get('user_value1')); // default returns
System::is_notset(post::get('user_value1'), 'N/A'); // default returns
*/

