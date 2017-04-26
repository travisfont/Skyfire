<?php

/**
 * Check whether string is serialized data
 *
 * @param string $string Serialized data
 * @param bool $hardcheck to use the actual serialize function
 *
 * @return bool False if not a serialized string, true if it is
 */
function is_serialized($string, $hardcheck = FALSE)
{
    // if it isn't a string, it isn't serialized
    if (!is_string($string))
    {
        return FALSE;
    }

    $string = trim($string);

    if ($hardcheck !== FALSE)
    {
        if ($string == 'N;')
        {
            return TRUE;
        }

        if (!preg_match( '/^([adObis]):/', $string, $badions))
        {
            return FALSE;
        }

        switch ($badions[1])
        {
            case 'a' :
            case 'O' :
            case 's' :
                if (preg_match( "/^{$badions[1]}:[0-9]+:.*[;}]\$/s", $string))
                {
                    return TRUE;
                }
                break;
            case 'b' :
            case 'i' :
            case 'd' :
                if (preg_match( "/^{$badions[1]}:[0-9.E-]+;\$/", $string))
                {
                    return TRUE;
                }
                break;
        }

        return FALSE;
    }
    else // hard check (using the actual serialize function
    {
        return ($string == serialize(FALSE) || @unserialize($string) !== FALSE);
    }
}


/*
var_dump(is_serialized('s:6:"foobar";')); // bool(true)
var_dump(is_serialized('foobar'));        // bool(false)
var_dump(is_serialized('b:0;'));          // bool(true)
*/
