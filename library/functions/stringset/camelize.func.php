<?php

/**
 * @param $string
 *
 * @return string
 */
function camelize($string)
{
    return (string) trim($string = preg_replace_callback('/(^|_)([a-z])/', function ($m)
    {
        return strtoupper($m[2]);
    },
    $string), '_');
}
