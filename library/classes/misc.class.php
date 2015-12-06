<?php

// Misc interface and function into object inherence

class Misc extends Controller
{
    // colorAabbr
    protected function color_abbr($abbr)
    {
        return color_abbr($abbr);
    }

    // getUserDefinedConstants
    protected function get_user_defined_constants()
    {
        return get_user_defined_constants();
    }

    // getImageSizePercentage
    protected function get_image_size_percentage($filename, $percentage)
    {
        return get_image_size_percentage($filename, $percentage);
    }

    // getImageScaleSize
    protected function get_image_scale_size($filename, $max_w = 100, $max_h = NULL)
    {
        return get_image_scale_size($filename, $max_w, $max_h);
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

    // getClientLang
    protected function get_client_lang()
    {
        return get_client_lang();
    }

    // darkerHex
    protected function darker_hex($hex, $amount = 30)
    {
        return darker_hex($hex, $amount);
    }
}
