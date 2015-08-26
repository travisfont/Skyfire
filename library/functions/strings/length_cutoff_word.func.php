<?php

function length_cutoff_word($string, $limit, $end_char = '...')
{
    if (trim($string) == '')
    {
        return $string;
    }

    preg_match('/^\s*+(?:\S++\s*+){1,'.((int) $limit).'}/', $string, $matches);

    if (strlen($string) == strlen($matches[0]))
    {
        $end_char = '';
    }

    return rtrim($matches[0]).$end_char;
}