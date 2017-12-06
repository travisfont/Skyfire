<?php

/**
 * 301 redirect to any subdomain
 *
 * @param $subdomain
 */
function redirect_subdomain($subdomain)
{
    if (strpos(strtoupper($_SERVER['SERVER_NAME']), strtoupper($subdomain)) === FALSE)
    {
        $redirect = vsprintf('Location: %s://%s%s%s', array
        (
            $_SERVER['REQUEST_SCHEME'],
            strtolower($subdomain),
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        ));

        header($redirect, TRUE, 301);
        exit;
    }
}