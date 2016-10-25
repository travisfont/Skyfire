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
                        // parameters - multiple data types:
                        // create a case for each data type! eventually this will become a static class to keep codebase DRY
                        switch ($type)
                        {
                            case 'uint8':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= 0) && ((int) $this->arguments[$key] <= 255))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'uint16':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= 0) && ((int) $this->arguments[$key] <= 65535))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'uint32':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= 0) && ((int) $this->arguments[$key] <= 16777215))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'uint64':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= 0) && ((int) $this->arguments[$key] <= 18446744073709551615))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'int8':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= -128) && ((int) $this->arguments[$key] <= 127))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'int16':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= -32768) && ((int) $this->arguments[$key] <= 32767))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'int32':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= -8388608) && ((int) $this->arguments[$key] <= 8388607))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'int64':
                                if (is_int($this->arguments[$key]) === TRUE && ((int) $this->arguments[$key] >= -9223372036854775808) && ((int) $this->arguments[$key] <= 9223372036854775807))
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                            case 'bool':
                                if (is_bool($this->arguments[$key]) === TRUE)
                                {
                                    $valid_type = TRUE;
                                }
                                break;
                        }
                    }

                    if ($valid_type === FALSE)
                    {
                        trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' contains an invalid data type count. Function execution failed.', E_USER_ERROR);
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
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 255)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint8. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'uint16':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 65535)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint16. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'uint32':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 16777215)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint32. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'uint64':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < 0 || ((int) $this->arguments[$key]) > 18446744073709551615)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint64 Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'int8':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < -128 || ((int) $this->arguments[$key]) > 127)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not int8. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'int16':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < -32768 || ((int) $this->arguments[$key]) > 32767)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not int16. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'int32':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < -8388608 || ((int) $this->arguments[$key]) > 8388607)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not int32. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'int64':
                        if (is_int($this->arguments[$key]) === FALSE || ((int) $this->arguments[$key]) < -9223372036854775808  || ((int) $this->arguments[$key]) > 9223372036854775807)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not int64 Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'string':
                        if (is_string($this->arguments[$key]) === FALSE || strlen($this->arguments[$key]) > 255)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not string. Function execution failed.', E_USER_ERROR);
                        }
                    case 'text':
                        if (is_string($this->arguments[$key]) === FALSE || strlen($this->arguments[$key]) > 65535)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not text. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'mediumtext':
                        if (is_string($this->arguments[$key]) === FALSE || strlen($this->arguments[$key]) > 16777215)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not mediumtext. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'longtext':
                        if (is_string($this->arguments[$key]) === FALSE || strlen($this->arguments[$key]) > 4294967295)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not longtext. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'bool':
                        if (is_bool($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not boolean. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'void':
                        if (isset($this->arguments[$key]))
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not void. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'null':
                        if ($this->arguments[$key] !== NULL)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not null. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'numeric':
                        if (is_numeric($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not numeric. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'float':
                        if (is_float($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not float. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'object':
                        if (is_object($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not object. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'array':
                        if (is_array($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not array. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'iterator':
                        if (is_array($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not iterator. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'enum':
                        if (is_object($this->arguments[$key]) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not enum. Function execution failed.', E_USER_ERROR);
                        }
                        break;
                    case 'ipv4':
                        if (filter_var($this->arguments[$key], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not ipv4. Function execution failed.', E_USER_ERROR);
                        }
                    case 'ipv6':
                        if (filter_var($this->arguments[$key], FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === FALSE)
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\'is not ipv6. Function execution failed.', E_USER_ERROR);
                        }
                    case 'any':
                    case 'mixed':
                        break;
                }
            }

            $key++;
        }

        $return_data = call_user_func_array($this->function_name, $this->arguments);

        // mutliple values have been set as return data type (via array)
        if (is_array($return_datatype))
        {
            // more than one data type
            if (count($return_datatype) > 1)
            {
                $valid_type = FALSE;

                // multi data type check here
                foreach ($return_datatype as $type)
                {
                    // create a case for each data type! eventually this will become a static class to keep codebase DRY
                    switch ($type)
                    {
                        case 'uint8':
                            if (is_int($return_data) === TRUE && ((int) $return_data >= 0) && ((int) $return_data <= 255))
                            {
                                $valid_type = TRUE;
                            }
                            break;
                        case 'bool':
                            if (is_bool($return_data) === TRUE)
                            {
                                $valid_type = TRUE;
                            }
                            break;
                    }
                }

                if ($valid_type === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value contains an invalid data type count. Function execution failed.', E_USER_ERROR);
                }
            }
            else
            {
                trigger_error('Function: '.$this->function_name.'() return value contains an invalid data type count. Must contain 1 or an array value of ONLY 2. Function execution failed.', E_USER_ERROR);
            }
        }

        // create a case for each data type! eventually this will become a static class to keep codebase DRY
        switch ($return_datatype)
        {
            case 'uint8':
                if (is_int($return_data) === FALSE || ((int) $return_data) < 0 || ((int) $return_data) > 255)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not uint8. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'uint16':
                if (is_int($return_data) === FALSE || ((int) $return_data) < 0 || ((int) $return_data) > 65535)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not uint16. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'uint32':
                if (is_int($return_data) === FALSE || ((int) $return_data) < 0 || ((int) $return_data) > 16777215)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not uint32. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'uint64':
                if (is_int($return_data) === FALSE || ((int) $return_data) < 0 || ((int) $return_data) > 18446744073709551615)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not uint64 Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'int8':
                if (is_int($return_data) === FALSE || ((int) $return_data) < -128 || ((int) $return_data) > 127)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not int8. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'int16':
                if (is_int($return_data) === FALSE || ((int) $return_data) < -32768 || ((int) $return_data) > 32767)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not int16. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'int32':
                if (is_int($return_data) === FALSE || ((int) $return_data) < -8388608 || ((int) $return_data) > 8388607)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not int32. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'int64':
                if (is_int($return_data) === FALSE || ((int) $return_data) < -9223372036854775808  || ((int) $return_data) > 9223372036854775807)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not int64 Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'string':
                if (is_string($return_data) === FALSE || strlen($return_data) > 255)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not string. Function execution failed.', E_USER_ERROR);
                }
            case 'text':
                if (is_string($return_data) === FALSE || strlen($return_data) > 65535)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not text. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'mediumtext':
                if (is_string($return_data) === FALSE || strlen($return_data) > 16777215)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not mediumtext. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'longtext':
                if (is_string($return_data) === FALSE || strlen($return_data) > 4294967295)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not longtext. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'bool':
                if (is_bool($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not boolean. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'void':
                if (isset($return_data))
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not void. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'null':
                if ($return_data !== NULL)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not null. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'numeric':
                if (is_numeric($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not numeric. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'float':
                if (is_float($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not float. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'object':
                if (is_object($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not object. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'array':
                if (is_array($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not array. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'iterator':
                if (is_array($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not iterator. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'enum':
                if (is_object($return_data) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not enum. Function execution failed.', E_USER_ERROR);
                }
                break;
            case 'ipv4':
                if (filter_var($return_data, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not ipv4. Function execution failed.', E_USER_ERROR);
                }
            case 'ipv6':
                if (filter_var($return_data, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === FALSE)
                {
                    trigger_error('Function: '.$this->function_name.'() return value is not ipv6. Function execution failed.', E_USER_ERROR);
                }
            case 'any':
            case 'mixed':
                break;
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
