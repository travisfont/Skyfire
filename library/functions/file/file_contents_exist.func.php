<?php

/**
 * returns a TRUE if the file contensts exist - safe function for using file_get_contents
 *
 * @param $url
 * @param int $response_code
 *
 * @return bool
 */
function file_contents_exist($url, $response_code = 200)
{
    $headers = get_headers($url);

    if (substr($headers[0], 9, 3) == $response_code)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
