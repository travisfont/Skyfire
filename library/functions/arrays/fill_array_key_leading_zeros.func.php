<?php

function fill_array_key_leading_zeros(array $array)
{

    foreach ($array as $key => $value)
    {
        $array[$key] = str_pad($value, strlen(max($array)), '0', STR_PAD_LEFT);
    }

    return (array) $array;
}

// checks each key (as an integer) in an array.
// If necessary, one or more leading zeros are added to an integer.

//Note that each integer becomes a string.

// print_r(add_leading_zeros(range(1,100)));