<?php

//  appends the define missing HTML tag to the end of the string
function append_missing_tag($string, $open, $close)
{

    $tag_count['open']  = count_str($open, $string);
    $tag_count['close'] = count_str($close, $string);

    if ($tag_count['open'] > $tag_count['close'])
    {
        $string .= $close;
    }

    return $string;
}

// $string = append_missing_tag($string, '<p>', '</p>');