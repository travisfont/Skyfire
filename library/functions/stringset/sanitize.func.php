<?php

/**
 * Remove tags, slashes, and html entities from a string.
 * Similar to clean_str().
 *
 * @param $string
 *
 * @return string
 */
function sanitize($string)
{
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = htmlentities($string);

    return $string;
}
