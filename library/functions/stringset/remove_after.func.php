<?php

/**
 * remove all characters after a specific string or character
 *
 * @param $string
 * @param $separator
 *
 * @return string
 */
function remove_after($string, $separator)
{
    return (string) strstr($string, $separator, TRUE);
}
