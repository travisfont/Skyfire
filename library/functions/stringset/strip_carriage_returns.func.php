<?php

/**
 * removes all newlines (carriage return) from string (typically HTML text)
 *
 * @param $string
 *
 * @return string
 */
function strip_carriage_returns($string)
{
    return (string) preg_replace("/\r|\n/", '', $string);
    //return str_replace(array("\n\r", "\n", "\r"), '', $string);
}
