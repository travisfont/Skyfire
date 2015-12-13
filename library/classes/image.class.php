<?php

// Image interface and function into object inherence

class Image extends Controller
{
    // darkerHex
    protected function darker_hex($hex, $amount = 30)
    {
        return darker_hex($hex, $amount);
    }

    // getImageScaleSize
    protected function get_image_scale_size($filename, $max_w = 100, $max_h = NULL)
    {
        return get_image_scale_size($filename, $max_w, $max_h);
    }

    // getImageSizePercentage
    protected function get_image_size_percentage($filename, $percentage)
    {
        return get_image_size_percentage($filename, $percentage);
    }


    // scaleImageToHeight
    protected function scale_image_to_height($filename, $target_height)
    {
        return scale_image_to_height($filename, $target_height);
    }

    // ScaleImageToWidth
    protected function scale_image_to_width($filename, $target_width)
    {
        return scale_image_to_width($filename, $target_width);
    }
}
