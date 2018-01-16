<?php

/**
 * @param $string
 *
 * @return bool
 */
function is_sha1($string)
{
    return (bool) preg_match('/^[0-9a-f]{40}$/i', $string);
}
