<?php

// removes any non-int characters from a string (only allows integers)

function strip_to_int($string)
{
    return (int) preg_replace('/[^0-9]/', '', $string);
}
