<?php

/**
 * @param $replace
 * @param $string
 *
 * @return string
 */
function replace_carriage_return($replace, $string)
{
    return (string) str_replace(array("\n\r", "\n", "\r"), $replace, $string);
}
