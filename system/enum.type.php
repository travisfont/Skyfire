<?php

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
