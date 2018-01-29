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
    return (string) ltrim(strstr($string, $separator), $separator);
}
