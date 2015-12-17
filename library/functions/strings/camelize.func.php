<?php

function camelize($string)
{
    return trim($string = preg_replace_callback('/(^|_)([a-z])/', function ($m)
        {
            return strtoupper($m[2]);
        },
        $string), '_');
}
