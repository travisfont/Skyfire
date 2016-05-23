<?php

function add_leading_zeros($number)
{
    return (string) str_pad($number, 2, '0', STR_PAD_LEFT);
}


// checks the input number (can be string or integetr)
// If necessary, one or more leading zeros are added to an integer.

//Note that each integer becomes a string.

// print_r(add_leading_zeros(range(1,100)));
