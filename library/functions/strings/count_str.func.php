<?php

function count_str($delimiter, $string)
{
    if (is_string($delimiter))
    {
        $array = explode($delimiter, $string);
    }

    if (is_array($delimiter))
    {
        $ready = str_replace($delimiter, $delimiter[0], $string);
        $array = explode($delimiter[0], $ready);
    }

    return (count($array) - 1);
}

//$string = '<p>bla bla blah</p><p>dsdasdsadas<br/>the end</p>';
//echo count_str('<p>', $string);
