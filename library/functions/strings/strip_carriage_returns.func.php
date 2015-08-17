<?php

//  removes all newlines (carriage return) from string (typically HTML text)

function strip_carriage_returns($string)
{
    return preg_replace("/\r|\n/", '', $string);
    //return str_replace(array("\n\r", "\n", "\r"), '', $string);
}