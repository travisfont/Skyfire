<?php

/**
 * removes any non-int characters from a string (only allows integers)
 *
 * @param $string
 *
 * @return int
 */
function strip_to_int($string)
{
    return (int) trim(preg_replace('/\d+/u', '', $string));
}

/*
 $str = '(111) 111-1111';
$str = strip_to_int($str);
echo $str;
OUTPUT:
1111111111
 */