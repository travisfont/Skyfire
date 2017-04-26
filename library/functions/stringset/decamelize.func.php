<?php

/**
 * @param $string
 *
 * @return string
 */
function decamelize($string)
{
    return (string) trim(strtolower(preg_replace('/[A-Z]/', '_$0', $string)), '_');
}
