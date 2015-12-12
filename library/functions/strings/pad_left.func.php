<?php

// show left side of string

function pad_left($string, $key)
{
    if (strstr($string, '/') !== FALSE)
    {
        return strrev(strstr(strrev($string), $key, FALSE));
    }
    else
    {
        return $string;
    }
}

// pad_left('dir/javascript/file.js', '/')
// SHOWS: dir/javascript/
