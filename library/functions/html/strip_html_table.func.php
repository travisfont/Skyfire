<?php

// removes any HTML Tables including it's data from a string
function strip_html_table($string)
{
    $pattern[] = '%<table\b[^>]*+>(?:(?R)|[^<]*+(?:(?!</?table\b)<[^<]*+)*+)*+</table>%i';
    $replace[] = '';

    return (string) preg_replace($pattern, $replace, $string);
}
