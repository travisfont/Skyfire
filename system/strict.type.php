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

    public function then_return($return_datatype)
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
            switch ($datatype)
            {
                case 'uint8':

                    if (!((int) $this->arguments[$key] >= 0) || !((int) $this->arguments[$key] <= 255))
                    {
                        trigger_error('Function: '.$this->function_name.'() at parameter \''.$parameter.'\' is not uint8. Function execution failed.', E_USER_ERROR);
                    }
            }

            $key++;
        }

        $return_data = call_user_func_array($this->function_name, $this->arguments);

        switch ($return_datatype)
        {
            case 'string':
                if (!is_string($return_data) || !(strlen($return_data) <= 255))
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