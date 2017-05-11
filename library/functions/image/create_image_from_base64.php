<?php

/**
 * @param $data
 * @param $filename
 * @param string $extension
 * @param int $quality
 *
 * @return bool
 */
function create_image_from_base64($data, $filename, $extension = 'jpg', $quality = 100)
{
    $image_data = base64_decode($data);
    $source     = imagecreatefromstring($image_data);

    if (imagejpeg($source, $filename.'.'.$extension, $quality))
    {
        imagedestroy($source);

        return TRUE;
    }
    else
    {
        return FALSE;
    }
}