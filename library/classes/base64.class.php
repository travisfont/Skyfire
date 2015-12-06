<?php

class base64
{

    private static function generateRandomString($length = 8)
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
        return $string;
    }

    // just creating an alias object
    public static function toJPG($base64_string, $output_file = false)
    {
        return self::toJPEG($base64_string, $output_file);
    }

    public static function toJPEG($base64_string, $output_file = false)
    {
        if (!$output_file)
        {
            $output_file = self::generateRandomString().'.jpg';
        }

        $ifp = fopen($output_file, "wb");

        $data = explode(',', $base64_string);

        fwrite($ifp, base64_decode($data[1]));
        fclose($ifp);

        return $output_file;
    }

}
