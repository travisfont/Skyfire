<?php

function preg_array_key_exists($pattern, array $array)
{
    // extract the keys
    $keys = array_keys($array);    

    // convert the preg_grep() returned array to int.. and return
    // the ret value of preg_grep() will be an array of values
    // that match the pattern
    return (int) preg_grep($pattern, $keys);
}

/* example:
$arr = array("abc"=>12,"dec"=>34,"fgh"=>56);

var_dump(preg_array_key_exists('/c$/',$arr)); // check if a key ends in 'c'.
var_dump(preg_array_key_exists('/x$/',$arr)); // check if a key ends in 'x'.

Outputs:
int(1)
int(0)
*/
