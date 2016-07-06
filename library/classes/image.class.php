<?php

// Image interface and function into object inherence

class Image extends Controller
{
    // darkerHex
    protected function darker_hex($hex, $amount = 30)
    {
        //return darker_hex($hex, $amount);
        return self::parameters(
        [
            'hex'    => DT::STRING,
            'amount' => DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($hex, $amount)
        ->returning([DT::BOOL, DT::STRING]);
    }

    // getImageScaleSize
    protected function get_image_scale_size($filename, $max_w = 100, $max_h = NULL)
    {
        //return get_image_scale_size($filename, $max_w, $max_h);
        return self::parameters(
        [
            'filename' =>  DT::STRING,
            'max_w'    =>  DT::UINT16,
            'max_h'    => [DT::UINT16, DT::NULL]
        ])
        ->call(__FUNCTION__)
        ->with($filename, $max_w, $max_h)
        ->returning([DT::BOOL, DT::NULL, DT::STD]);
    }

    // getImageSizePercentage
    protected function get_image_size_percentage($filename, $percentage)
    {
        //return get_image_size_percentage($filename, $percentage);
        return self::parameters(
        [
            'filename'   =>  DT::STRING,
            'percentage' =>  DT::UINT8,
        ])
        ->call(__FUNCTION__)
        ->with($filename, $percentage)
        ->returning([DT::BOOL, DT::NULL, DT::STD]);
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

    // createImageFromBase64
    protected function create_image_from_base64($data, $filename, $extension = 'jpg', $quality = 100)
    {
        return create_image_from_base64($data, $filename, $extension, $quality);
    }
}
