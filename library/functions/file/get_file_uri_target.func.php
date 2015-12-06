<?php

/**
 * Returns the part of a URI after the schema.
 *
 * @param $uri
 *   A stream, referenced as "scheme://target".
 *
 * @return
 *   A string containing the target (path), or FALSE if none.
 *   For example, the URI "public://sample/test.txt" would return
 *   "sample/test.txt".
 */
function get_file_uri_target($uri)
{
    $data = explode('://', $uri, 2);

    // Remove erroneous leading or trailing, forward-slashes and backslashes.
    return count($data) == 2 ? trim($data[1], '\/') : FALSE;
}
