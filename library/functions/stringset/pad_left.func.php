<?php

/**
 * show left side of string
 *
 * @param $string
 * @param $divider
 *
 * @return string
 */
function pad_left($string, $divider)
{
    if (strstr($string, $divider) !== FALSE)
    {
        return (string) strrev(strstr(strrev($string), $divider, FALSE));
    }
    else
    {
        return (string) $string;
    }
}

// pad_left('dir/javascript/file.js', '/')
// SHOWS: dir/javascript/
