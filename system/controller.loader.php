<?php 

/* Main Skyfire System Library */

abstract class Response
{
    protected static function api($service_name) {}
    protected static function view($view_name) {}
    protected static function json() {}
    protected static function xml() {}
    protected function with($data) {}
}

class Controller extends Response
{
    public static function __callStatic($function, $arguments)
    {
        $class = get_called_class();

        if (is_file('./library/functions/'.strtolower($class).'/'.$function.'.func.php'))
        {
            require_once './library/functions/'.strtolower($class).'/'.$function.'.func.php';
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
        else
        {
            // return FALSE;
            throw new Exception('Failed to load: functions/'.strtolower($class).'/'.$function.'.func.php');
        }
    }

    /*
    * 
    * Check if a value is empty (...) if so then replaces with an empty string by default
    * or define set variable in the second parameter.
    */
    public function isNotSet($var, $default = TRUE)
    {
        return empty($var) ? $default : $var;
    }

    /* Examples:
    -------------
    $this->isNotSet(Input::post('user_value1'));        // returns value if not empty
    $this->isNotSet(Input::post('user_value1'), 'N/A'); // returns N/A if empty
    */

}





