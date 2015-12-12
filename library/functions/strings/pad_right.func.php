<?php

// show right side of string

function pad_right($string, $key)
{
    if (strstr($string, '/') !== FALSE)
    {
        return strrev(strstr(strrev($string), $key, TRUE));
    }
    else
    {
        return $string;
    }
}

//pad_right('dir/javascript/file.js', '/')
// SHOWS: file.js
