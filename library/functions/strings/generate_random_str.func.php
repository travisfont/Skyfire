<?php

function generate_random_str($length = 8)
{
    if (!$string = bin2hex(openssl_random_pseudo_bytes($length)))
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++)
        {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
    }

    return (string) $string;
}