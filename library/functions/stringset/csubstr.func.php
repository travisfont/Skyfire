<?php

// substr that doesn't count bbcode and html code within the string

/**
 * @param string string
 * @param int start
 * @param int length
 * @param bool safe_quotes
 *
 * @return string
 */

function csubstr($string, $start, $length = FALSE, $safe_quotes = FALSE)
{
    $pattern = '/(\[\w+[^\]]*?\]|\[\/\w+\]|<\w+[^>]*?>|<\/\w+>)/i';
    $clean   = preg_replace($pattern, chr(1), $string);

    if (!$length)
    {
        $str = substr($clean, $start);
    }
    else
    {
        $str = substr($clean, $start, $length);
        $str = substr($clean, $start, $length + substr_count($str, chr(1)));
    }

    $pattern = str_replace(chr(1),'(.*?)', preg_quote($str));

    if ($safe_quotes === TRUE)
    {
        $pattern = preg_quote($pattern, '/');
    }

    if (preg_match('/'.$pattern.'/is', $string, $matched))
    {
        return $matched[0];
    }

    return (string) $string;
}
