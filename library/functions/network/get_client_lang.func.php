<?php

/**
 * Gets the client language. E.g.: en, fr, de, etc.
 *
 * @return string
 */
function get_client_lang()
{
    return (string) substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
}
