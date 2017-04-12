<?php

/**
 * @param $pattern
 * @param array $array
 *
 * @return int
 */
function preg_array_key_exists($pattern, array $array)
{
    return (int) preg_grep($pattern, array_keys($array));
}

/* example:
$arr = array("abc"=>12,"dec"=>34,"fgh"=>56);

var_dump(preg_array_key_exists('/c$/',$arr)); // check if a key ends in 'c'.
var_dump(preg_array_key_exists('/x$/',$arr)); // check if a key ends in 'x'.

Outputs:
int(1)
int(0)
*/
