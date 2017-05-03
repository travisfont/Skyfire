<?php

/**
 * Returns the scheme of a URI (e.g. a stream)
 *
 * @param $uri A stream, referenced as "scheme://target".
 *
 * @return bool|string
 * A string containing the name of the scheme, or FALSE if none. For example,
 *   the URI "public://example.txt" would return "public".
 */
function get_file_uri_scheme($uri)
{
    $position = strpos($uri, '://');

    return $position ? substr($uri, 0, $position) : FALSE;
}
