<?php

/**
 * @param $string
 * @param $token
 *
 * @return string
 */
function substr_extract($string, $token)
{
    return strtok($string, $token);
}