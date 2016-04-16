<?php

function get_client_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        return (string) $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        return (string) $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        return (string) $_SERVER['REMOTE_ADDR'];
    }
}
