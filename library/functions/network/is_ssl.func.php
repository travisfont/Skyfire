<?php

/**
 * Determine if SSL is used
 *
 * @return bool True if SSL, false if not used
 */
function is_ssl()
{
    if (isset($_SERVER['HTTPS']))
    {
        if (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')
        {
            return TRUE;
        }
    }
    elseif (isset($_SERVER['SERVER_PORT']) && ($_SERVER['SERVER_PORT'] == '443'))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
