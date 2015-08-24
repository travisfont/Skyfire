<?php

function count_html_output_lines($string)
{
    $count_str = function ($delimiter, $string)
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
    };

    $str = strtolower(str_replace(' ', '', $string));
    $br  = $count_str('<br', $str) + 1;
    $p   = $count_str('<p>', $str) * 2;

    return ($br + $p);
}

// more lines than the the description section can handle (max 14 lines)
// if (count_html_output_lines($description) > 14) {}