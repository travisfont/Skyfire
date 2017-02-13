<?php

function add_leading_zeros($number, $strlen, $leading = 0)
{
    return (string) str_pad($number, ($strlen + $leading), '0', STR_PAD_LEFT);
}


// checks the input number (can be string or integetr)
// If necessary, one or more leading zeros are added to an integer.

//Note that each integer becomes a string.

/*
$number = range(1, 100);
print_r(add_leading_zeros($number, 5));
*/
