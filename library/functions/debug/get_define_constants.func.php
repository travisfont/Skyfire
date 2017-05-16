<?php

/**
 * display an array of all the define constants and their values
 * defaults to user define constants
 *
 * @param string $type
 *
 * @return array
 */
function get_define_constants($type = 'user')
{
    $constants = get_defined_constants(TRUE);

    return (array) $constants[$type];
}
