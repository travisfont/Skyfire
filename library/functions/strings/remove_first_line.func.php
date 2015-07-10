<?php

function remove_first_line($string)
{
    return preg_replace('/^.+\n/', '', $string);
}

/*

Example:
------------

$text = "First line.<br/>\nSecond line.<br/>\nThird line.<br/>\n";
$text .= "4th line.<br/>\n5th line.<br/>\n6th line.<br/>\n";

echo remove_first_line($text);


Returns:
----------
Second line.
Third line.
4th line.
5th line.
6th line.

*/