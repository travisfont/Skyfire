<?php

/**
 * splits (seperates) numbers and strings within a string into a complex array
 *
 * @param $string
 *
 * @return array
 */
function split_number_str_to_array($string)
{
    preg_match_all('~^(.*?)(\d+)~m', $string, $matches);

    return (array) $matches;
}

/*
$string = 'sometext moretext 01 text
text sometext moretext 002
text text 1 (somemoretext)
etc';

RETURNS:
Array
(
    [0] => Array
        (
            [0] => sometext moretext 01
            [1] => text sometext moretext 002
            [2] => text text 1
        )
    [1] => Array
        (
            [0] => sometext moretext 
            [1] => text sometext moretext 
            [2] => text text 
        )
    [2] => Array
        (
            [0] => 01
            [1] => 002
            [2] => 1
        )
)
*/
