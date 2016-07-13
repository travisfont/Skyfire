<?php 

function get_user_defined_constants()
{
    $constants = get_defined_constants(TRUE);

    return (array) (isset($constants['user']) ? $constants['user'] : array());
}
