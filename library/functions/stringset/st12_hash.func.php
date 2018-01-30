<?php

/**
 * Converts a string (binary) into ST-12 (12 character short) hash
 *
 * @param $string
 *
 * @return bool|string
 */
function st12_hash($string)
{
    return substr(base_convert(md5($string), 16, 32), 0, 12);
}
