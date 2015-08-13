<?php

function scale_image_to_height($filename, $target_height)
{
    $size = getimagesize($filename);
    $target_width = $target_height * ($size[0] / $size[1]);

    return $target_width;
}