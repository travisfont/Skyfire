<?php

class Input
{
    /**
     * retrieve all the post elements
     *
     * @param $key
     * @param bool $clean_xss
     * @return array|string
     */
    public static function post($key = NULL, $clean_xss = TRUE)
    {
        if ($clean_xss)
        {
            if (empty($key))
            {
                if($_POST)
                {
                    $input = array();
                    foreach ($_POST as $key => $string)
                    {
                        $input[strip_tags($key)] = self::clean($string);
                    }
                    return $input;
                }
            }
            else
            {
                return self::clean($_POST[$key]);
            }
        }
        else
        {
            if (empty($key))
            {
                return $_POST;
            }
            else
            {
                return $_POST[strip_tags($key)];
            }
        }
    }

    /**
     * retrieve all the post elements
     *
     * @param $key
     * @param bool $clean_xss
     * @return array|string
     */
    public static function get($key = NULL, $clean_xss = TRUE)
    {
        if ($clean_xss)
        {
            if (empty($key))
            {
                $input = array();
                foreach($_GET as $key => $string)
                {
                    $input[strip_tags($key)] = self::clean($string);
                }
                return $input;
            }
            else
            {
                return self::clean($_GET[$key]);
            }
        }
        else
        {
            if (empty($key))
            {
                return $_GET;
            }
            else
            {
                return $_GET[strip_tags($key)];
            }
        }
    }

    /**
     * @param $key
     * @param bool $clean_xss
     * @return mixed
     */
    public static function request($key, $clean_xss = TRUE)
    {
        if ($clean_xss)
        {
            if (empty($key))
            {
                $input = array();
                foreach($_REQUEST as $key => $string)
                {
                    $input[strip_tags($key)] = self::clean($string);
                }
                return $input;
            }
            else
            {
                return self::clean($_REQUEST[$key]);
            }
        }
        else
        {
            if (empty($key))
            {
                return $_REQUEST;
            }
            else
            {
                return $_REQUEST[strip_tags($key)];
            }
        }
    }

    /**
     * retrieve all the post and get elements
     *
     * @param string $method
     * @param $clean_xss
     * @return array|string
     */
    public function all($method = 'request', $clean_xss = TRUE)
    {
        switch ($method)
        {
            case 'post':
                return $clean_xss ? self::clean($_POST) : $_POST;
                break;
            case 'get':
                return $clean_xss ? self::clean($_GET) : $_GET;
                break;
            default:
                return $clean_xss ? self::clean($_REQUEST) : $_REQUEST;
        }
    }

    /**
     * @param $var
     * @return array|string
     */
    private static function clean($var)
    {
        if (is_array($var))
        {
            return array_map(function ($value)
            {
                return strip_tags($value);
            }, $var);
        }
        else
        {
            return strip_tags($var);
        }
    }

    /**
     * if a field value is not empty
     *
     * @param $key
     * @return bool
     */
    public static function has($key)
    {
        return trim((string) $_REQUEST[$key]) !== '';
    }

    /**
     * if the field exist
     *
     * @param $key
     * @return bool
     */
    public static function exists($key)
    {
        return (bool) isset($_REQUEST[$key]);
    }

    // field validator
    // @$rules - array
    public static function validate(array $rules)
    {
        // call the validator service
    }

    // gets the requested body from a JSON POST
    function request_payload($as_array = FALSE)
    {
        return json_decode(file_get_contents('php://input'), $as_array);
    }

}
