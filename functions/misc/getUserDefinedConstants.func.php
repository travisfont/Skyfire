<?php 

function getUserDefinedConstants()
{
    $constants = get_defined_constants(TRUE);
    return (isset($constants['user']) ? $constants['user'] : array());
}