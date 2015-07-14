<?php 


function get_user_defined_constants()
{
    $constants = get_defined_constants(TRUE);

    return (isset($constants['user']) ? $constants['user'] : array());
}