<?php

/**
 * show right side of string
 *
 * @param $string
 * @param $divider
 *
 * @return string
 */
function pad_right($string, $divider)
{
    if (strstr($string, $divider) !== FALSE)
    {
        return (string) strrev(strstr(strrev($string), $divider, TRUE));
    }
    else
    {
        return (string) $string;
    }
}

//pad_right('dir/javascript/file.js', '/')
// SHOWS: file.js
