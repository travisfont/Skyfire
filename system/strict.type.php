<?php

class Functional_Returner
{
    private $parameters;
    private $arguments;
    private $function_name;

    public function __construct(array $parameters, array $arguments, $function_name)
    {
        $this->parameters    = $parameters;
        $this->arguments     = $arguments;
        $this->function_name = $function_name;
    }

    public function returning($return_datatype)
    {
        /*
        var_dump($this->parameters);
        var_dump($this->arguments);
        var_dump($this->function_name);
        var_dump($return_datatype);
        */

        #var_dump('@@@@');
        #var_dump($this->parameters);
        #var_dump($this->arguments);

        #var_dump('----------');
        $key = 0;
        foreach ($this->parameters as $parameter => $datatype)
        {
            // mutliple values have been set as argument (via array)
            if (is_array($datatype))
            {
                // more than one data type
                if (count($datatype) > 1)
                {
                    $valid_type = FALSE;

                    // multi data type check here
                    foreach ($datatype as $type)
                    {
                        // create a case for each data type! eventually this will become a static class to keep codebase DRY
                        switch ($type)
                        {
                            case 'uint8':
                                if (((int) $this->arguments[$key] >= 0) && ((int) $this->arguments[$key] <= 255)) // is_uint8()
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                        }
                    }

                    if (!$valid_type)
                    {
                        trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' contains an invalid data type count. Must contain 1 or an array value of ONLY 2. Function execution failed.', E_USER_ERROR);
                    }
                }
                else
                {
                    trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' contains an invalid data type count. Must contain 1 or an array value of ONLY 2. Function execution failed.', E_USER_ERROR);
                }
            }
            else // single value has been set an argument
            {
                #var_dump($datatype);
                // create a case for each data type! eventually this will become a static class to keep codebase DRY
                switch ($datatype)
                {
                    case 'uint8':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 255) // is_uint8()
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint8. Function execution failed.', E_USER_ERROR);
                        }
                    case 'uint16':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 65535) // is_uint16()
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint16. Function execution failed.', E_USER_ERROR);
                        }
                    case 'uint32':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 16777215) // is_uint32()
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint32. Function execution failed.', E_USER_ERROR);
                        }
                    case 'uint64':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 18446744073709551615) // is_uint64()
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint64 Function execution failed.', E_USER_ERROR);
                        }
                }
            }

            $key++;
        }

        $return_data = call_user_func_array($this->function_name, $this->arguments);

        // create a case for each data type! eventually this will become a static class to keep codebase DRY
        switch ($return_datatype)
        {
            case 'string':
                if (!is_string($return_data) || !(strlen($return_data) <= 255)) // is_string()
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not string. Function execution failed.', E_USER_ERROR);
                }
        }

        return $return_data;
    }
}

class Functional_Parameters
{
    private $parameters;
    private $function_name;

    public function __construct(array $parameters, $function_name)
    {
        $this->parameters    = $parameters;
        $this->function_name = $function_name;
    }

    public function with()
    {
        // retrieves the argement values
        $arguments = func_get_args();

        return new Functional_Returner($this->parameters, $arguments, $this->function_name);
    }

    // mirrors returning() of Functional_Returner (REQUIRES TESTING)
    public function returning($return_datatype)
    {
               $functional_returner = new Functional_Returner($this->parameters, array(), $this->function_name);
        return $functional_returner->returning($return_datatype);
    }
}

class Functional_Caller
{
    private $parameters;

    public function __construct(array $parameters)
    {
        // TODO: remove $ if the first character of the key contains $
        $this->parameters = $parameters;
    }

    public function call($function_name)
    {
        return new Functional_Parameters($this->parameters, $function_name);
    }
}


// PHP Enumerator Pattern (and class)
class Enum
{
    private $enums;
    private $clear_flag;
    private $last_value;

    // pptionally pass in your enums
    final public function __construct()
    {
        $this->enums      = array();
        $this->clear_flag = FALSE;
        $this->last_value = 0;

        if (func_num_args() > 0)
        {
            return $this->put(func_get_args());
        }

        return TRUE;
    }

    final private function __clone()
    {
        throw new Exception('Method not supported');
    }

    final public static function to_array()
    {
        return (new ReflectionClass(static::class))->getConstants();
    }

    final public static function is_valid($value)
    {
        return in_array($value, static::to_array());
    }

    // insert one or more enums
    final private function put()
    {
        $args = func_get_args();

        // did they send an array of enums?
        // Ex: $c->put( array( "a"=>0, "b"=>1,...) );
        // OR  $c->put( array( "a", "b", "c",... ) );
        if (is_array($args[0]))
        {
            // add them all in
            foreach ($args[0] as $k => $v)
            {
                // can't change the values once they're is set
                if (!isset($this->enums[$k]))
                {
                    // if they sent an array of enums like this: "a","b","c",... then we have to
                    //  change that to be "A"=>#. Where "#" is the current count of the enums
                    if (is_numeric($k))
                    {
                        $this->enums[$v] = $this->last_value++;
                    }
                    else // else - they sent "a"=>"A", "b"=>"B", "c"=>"C"...
                    {
                        $this->last_value = $v + 1;
                        $this->enums[$k] = $v;
                    }
                }
            }
        }
        else // was only one enum set?
        {
            // is this just a default declaration?
            // Ex: $c->put( "a" );
            if (count($args) < 2)
            {
                if (!isset($this->enums[$args[0]]))
                {
                    $this->enums[$args[0]] = $this->last_value++;
                }
                else
                {
                    // they set a regular enum - $c->put("a", "This is the first enum");
                    if (!isset($this->enums[$args[0]]))
                    {
                        $this->last_value      = $args[1] + 1;
                        $this->enums[$args[0]] = $args[1];
                    }
                }
            }
        }

        return TRUE;
    }

    // get one or more enums.
    final private function get()
    {
        $num  = func_num_args();
        $args = func_get_args();

        // is this an array of enums request? (ie: $c->get(array("a","b","c"...)) )
        if (is_array($args[0]))
        {
            $array = array();

            foreach ($args[0] as $k => $v)
            {
                $array[$v] = $this->enums[$v];
            }

            return $array;
        }

        // i it just ONE enum they want? (ie: $c->get("a") )
        else if (($num > 0) && ($num < 2))
        {
            return $this->enums[$args[0]];
        }

        // is it a list of enums they want? (ie: $c->get( "a", "b", "c"...) )
        else if ($num > 1)
        {
            $array = array();

            foreach ($args as $k => $v)
            {
                $array[$v] = $this->enums[$v];
            }

            return $array;
        }

        return FALSE;
    }

    // clear out the enum array - set the flag in the __construct function
    // after all, ENUMS are supposed to be constant
    final private function clear()
    {
        if  ($this->clear_flag)
        {
            unset($this->enums);

            $this->enums = array();
        }

        return TRUE;
    }

    // in case someone tries to blow up the class
    final public function __call($name, $arguments)
    {
        if (isset($this->enums[$name]))
        {
            return $this->enums[$name];
        }
        else if (!isset($this->enums[$name]) && (count($arguments) > 0))
        {
            $this->last_value   = $arguments[0] + 1;
            $this->enums[$name] = $arguments[0];

            return TRUE;
        }
        else if (!isset($this->enums[$name]) && (count($arguments) < 1))
        {
            $this->enums[$name] = $this->last_value++;

            return TRUE;
        }

        return FALSE;
    }

    // gets the value
    final public function __get($name)
    {
        if (isset($this->enums[$name]))
        {
            return $this->enums[$name];
        }
        else if (!isset($this->enums[$name]))
        {
            $this->enums[$name] = $this->last_value++;

            return TRUE;
        }

        return FALSE;
    }

    // sets the value
    final public function __set($name, $value = NULL)
    {
        if (isset($this->enums[$name]))
        {
            return FALSE;
        }
        else if (!isset($this->enums[$name]) && !is_null($value))
        {
            $this->last_value   = $value + 1;
            $this->enums[$name] = $value;

            return TRUE;
        }
        else if (!isset($this->enums[$name]) && is_null($value))
        {
            $this->enums[$name] = $this->last_value++;

            return TRUE;
        }

        return FALSE;
    }

    // deconstruct the class - remove the list of enums.
    final public function __destruct()
    {
        unset($this->enums);
        $this->enums = null;

        return TRUE;
    }

}
