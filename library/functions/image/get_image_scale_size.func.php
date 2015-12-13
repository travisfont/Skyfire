<?php

function get_image_scale_size($filename, $max_w = 100, $max_h = NULL)
{
    function file_contents_exist($url)
    {
        $headers = get_headers($url);

        if (substr($headers[0], 9, 3) == 200)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    if (is_null($max_h))
    {
        $max_h = $max_w;
    }

    if (file_contents_exist($filename))
    {
        list($img_w, $img_h) = getimagesize($filename);

        $f = min($max_w / $img_w, $max_h / $img_h, 1);
        $w = round($f * $img_w);
        $h = round($f * $img_h);

        // return array($w, $h);
        return (object) array('width' => $w, 'height' => $h);
    }

    return NULL;
}
