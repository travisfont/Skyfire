<?php 

function isSerialized($str) {
    return ($str == serialize(false) || @unserialize($str) !== false);
}

/*
var_dump(isSerialized('s:6:"foobar";')); // bool(true)
var_dump(isSerialized('foobar'));        // bool(false)
var_dump(isSerialized('b:0;'));          // bool(true)
*/