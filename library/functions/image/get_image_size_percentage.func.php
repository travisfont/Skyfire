<?php

function get_image_size_percentage($filename, $percentage)
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

    if (file_contents_exist($filename))
    {
        $image_file = getimagesize($filename);

        $width  = (($image_file[0] / 100) * $percentage);
        $height = (($image_file[1] / 100) * $percentage);

        return (object) array('width' => $width, 'height' => $height);
    }
    else
    {
        return NULL;
    }
}
