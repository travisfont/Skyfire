<?php

/**
 * remove all characters before a specific string or character
 *
 * @param $string
 * @param $separator
 *
 * @return string
 */
function remove_before($string, $separator)
{
    if (strpos($string, $separator) === FALSE)
    {
        return (string) $string;
    }
    
    return (string) ltrim(strstr($string, $separator), $separator);
}