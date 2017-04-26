<?php

/**
 * returns text limited by a specified length of characters but keeping words intact.
 * the final character count will not be exact since it is affected by the possible removing of the a long word or by the addition of the ellipsis
 *
 * @param string $string the input string
 * @param int $chars the length of characters wanted
 * @param string $ellipsis the ellipsis to be used, defaults to '...'
 *
 * @return string
 */
function safe_word_truncate($string = '', $chars = 255, $ellipsis = '...')
{
    list($new_string, $ellipsis) = explode("\n", wordwrap($string, $chars, "\n", FALSE));

    return (string) ($ellipsis) ? $new_string.'...' : $new_string;
}

/*
function safe_word_truncate($string, $chars, $ellipsis = '...')
{
    if (strlen($string) > $chars)
    {
        return (string) preg_replace('/\s+?(\S+)?$/', '', substr($string, 0, $chars)).$ellipsis;
    }

    return $string.$ellipsis;
}
*/