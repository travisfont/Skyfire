<?php

/**
 * explodes an string into an array with a trim (after)
 */

function trim_explode($delimiter, $string, $trim = 'trim', $limit = PHP_INT_MAX)
{
    return (array) array_map($trim, explode($delimiter, $string, $limit));
}