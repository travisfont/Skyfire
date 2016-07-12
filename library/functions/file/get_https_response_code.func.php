<?php

// returns the HTTPS response code (number) of the full path URL

function get_https_response_code($url)
{
    $headers = get_headers($url);

    return (int) substr($headers[0], 10, 3);
}
