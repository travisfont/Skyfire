<?php

function get_client_ip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
        return $_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}

# alias:
function getClientIP()    {
  return get_client_ip(); }