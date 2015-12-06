<?php 

function is_serialized($string)
{
    return ($string == serialize(FALSE) || @unserialize($string) !== FALSE);
}

/*
var_dump(is_serialized('s:6:"foobar";')); // bool(true)
var_dump(is_serialized('foobar'));        // bool(false)
var_dump(is_serialized('b:0;'));          // bool(true)
*/
