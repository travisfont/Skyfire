<?php

// Image interface and function into object inherence

class Image extends Controller
{
    protected function convert_base64_jpg($base64_string, $output_file = FALSE)
    {
        //return (string) convert_base64_jpg($base64_string, $output_file);
        return (string) self::parameters(
        [
            'base64_string' => DT::LONGTEXT,
            'output_file'   => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($base64_string, $output_file)
        ->returning(DT::STRING);
    }

    protected function create_image_from_base64($data, $filename, $extension = 'jpg', $quality = 100)
    {
        //return (bool) create_image_from_base64($data, $filename, $extension, $quality);
        return (bool) self::parameters(
        [
            'data'      =>  DT::LONGTEXT,
            'filename'  =>  DT::STRING,
            'extension' =>  DT::STRING,
            'quality'   =>  DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($data, $filename, $extension, $quality)
        ->returning(DT::BOOL);
    }

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

    protected function get_image_size_percentage($filename, $percentage)
    {
        //return get_image_size_percentage($filename, $percentage);
        return self::parameters(
        [
            'filename'   =>  DT::STRING,
            'percentage' =>  DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($filename, $percentage)
        ->returning([DT::BOOL, DT::NULL, DT::STD]);
    }

    protected function scale_image_to_height($filename, $target_height)
    {
        //return scale_image_to_height($filename, $target_height);
        return self::parameters(
        [
            'filename'      =>  DT::STRING,
            'target_height' =>  DT::UINT32
        ])
        ->call(__FUNCTION__)
        ->with($filename, $target_height)
        ->returning([DT::UINT32, DT::FLOAT]);
    }

    protected function scale_image_to_width($filename, $target_width)
    {
        //return scale_image_to_width($filename, $target_width);
        return self::parameters(
        [
            'filename'     =>  DT::STRING,
            'target_width' =>  DT::UINT32
        ])
        ->call(__FUNCTION__)
        ->with($filename, $target_width)
        ->returning([DT::UINT32, DT::FLOAT]);
    }
}
