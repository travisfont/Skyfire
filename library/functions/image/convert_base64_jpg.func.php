<?php

// creates the image within a directory (unless creating a image string) from Base64

function convert_base64_jpg($base64_string, $output_file = FALSE)
{
    function _generate_random_str($length = 8)
    {
        if (!$string = bin2hex(openssl_random_pseudo_bytes($length)))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $string     = '';

            for ($i = 0; $i < $length; $i++)
            {
                $string .= $characters[rand(0, strlen($characters) - 1)];
            }
        }

        return (string) $string;
    }

    if (!$output_file)
    {
        $output_file = _generate_random_str().'.jpg';
    }

    $ifp  = fopen($output_file, "wb");
    $data = explode(',', $base64_string);

    fwrite($ifp, base64_decode($data[1]));
    fclose($ifp);

    return (string) $output_file;
}
