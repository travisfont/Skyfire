<?php

function multi_explode($delimiters, $string)
{
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $array = explode($delimiters[0], $ready);

    return $array;
}

// $list = multi_explode(array(',', '.'), $text);
