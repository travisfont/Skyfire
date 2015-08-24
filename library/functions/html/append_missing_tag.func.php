<?php

//  appends the define missing HTML tag to the end of the string
function append_missing_tag($string, $open, $close)
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

    $tag_count['open']  = $count_str($open, $string);
    $tag_count['close'] = $count_str($close, $string);

    if ($tag_count['open'] > $tag_count['close'])
    {
        $string .= $close;
    }

    return $string;
}

// $string = append_missing_tag($string, '<p>', '</p>');