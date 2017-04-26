<?php

/**
 * @param $string
 * @param $word_count
 *
 * @return string
 */
function word_truncate($string, $word_count)
{
    $retval = $string;
    $string = preg_replace('/(?<=\S,)(?=\S)/', ' ', $string);
    $string = str_replace("\n", " ", $string);
    $array  = explode(" ", $string);

    if (count($array) <= $word_count)
    {
        $retval = $string;
    }
    else
    {
        array_splice($array, $word_count);

        $retval = implode(" ", $array)." ...";
    }

    return (string) $retval;
}
