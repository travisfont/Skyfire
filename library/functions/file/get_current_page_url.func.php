<?php

function get_current_page_url()
{
    $page_url = 'http';

    if (isset($_SERVER['HTTPS']))
    {
        if (strtolower($_SERVER['HTTPS']) == 'on' || $_SERVER['HTTPS'] == '1')
        {
            $page_url .= 's';
        }
    }
    elseif (isset($_SERVER['SERVER_PORT']) && ($_SERVER['SERVER_PORT'] == '443'))
    {
        $page_url .= 's';
    }

    $page_url .= '://';

    if ($_SERVER['SERVER_PORT'] != '80')
    {
        $page_url .= $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['REQUEST_URI'];
    }
    else
    {
        $page_url .= $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
    }

    return $page_url;
}
