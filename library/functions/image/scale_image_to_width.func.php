<?php

function scale_image_to_width($filename, $target_width)
{
    $size = getimagesize($filename);
    $target_height = $target_width * ($size[1] / $size[0]);

    return (float) $target_height;
}
