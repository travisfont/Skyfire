<?php

// splits (seperates) numbers and strings within a string into a complex array
function split_number_str_to_array($string)
{
    preg_match_all('~^(.*?)(\d+)~m', $string, $matches);

    return $matches;
}