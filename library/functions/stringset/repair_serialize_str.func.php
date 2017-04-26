<?php

/**
 * fix broken serialize string using following function, with multibyte character handling
 *
 * @param $string
 * @param bool $mb_strlen
 *
 * @return string
 */
function repair_serialize_str($string, $mb_strlen = FALSE)
{
    return (string) preg_replace_callback('!s:(\d+):"(.*?)";!', function ($match) use ($mb_strlen)
    {
        if ($mb_strlen === TRUE)
        {
            return ($match[1] == mb_strlen($match[2])) ? $match[0] : 's:'.mb_strlen($match[2]).':"'.$match[2].'";';
        }
        else
        {
            return ($match[1] == strlen($match[2])) ? $match[0] : 's:'.strlen($match[2]).':"'.$match[2].'";';
        }
    },
    $string);
}