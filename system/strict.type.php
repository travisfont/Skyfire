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

        $key = 0;
        foreach ($this->parameters as $parameter => $datatype)
        {
            if (is_array($datatype))
            {
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
            else
            {
                // create a case for each data type! eventually this will become a static class to keep codebase DRY
                switch ($datatype)
                {
                    case 'uint8':
                        if (!((int) $this->arguments[$key] >= 0) || !((int) $this->arguments[$key] <= 255)) // is_uint8()
                        {
                            trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint8. Function execution failed.', E_USER_ERROR);
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
        $this->parameters = $parameters;
    }

    public function call($function_name)
    {
        return new Functional_Parameters($this->parameters, $function_name);
    }
}