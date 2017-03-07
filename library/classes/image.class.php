<?php

// Image interface and function into object inherence

class Image extends Controller
{
    protected function convert_base64_jpg($base64_string, $output_file = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'base64_string' => DT::LONGTEXT,
                'output_file'   => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($base64_string, $output_file)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) convert_base64_jpg($base64_string, $output_file);
        }
    }

    protected function create_image_from_base64($data, $filename, $extension = 'jpg', $quality = 100)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
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
        else
        {
            return (bool) create_image_from_base64($data, $filename, $extension, $quality);
        }
    }

    protected function darker_hex($hex, $amount = 30)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'hex'    => DT::STRING,
                'amount' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($hex, $amount)
            ->returning([DT::BOOL, DT::STRING]);
        }
        else
        {
            return darker_hex($hex, $amount);
        }
    }

    protected function get_image_scale_size($filename, $max_w = 100, $max_h = NULL)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
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
        else
        {
            return get_image_scale_size($filename, $max_w, $max_h);
        }
    }

    protected function get_image_size_percentage($filename, $percentage)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename'   =>  DT::STRING,
                'percentage' =>  DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($filename, $percentage)
            ->returning([DT::BOOL, DT::NULL, DT::STD]);
        }
        else
        {
            return get_image_size_percentage($filename, $percentage);
        }
    }

    protected function scale_image_to_height($filename, $target_height)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename'      =>  DT::STRING,
                'target_height' =>  DT::UINT32
            ])
            ->call(__FUNCTION__)
            ->with($filename, $target_height)
            ->returning([DT::UINT32, DT::FLOAT]);
        }
        else
        {
            return scale_image_to_height($filename, $target_height);
        }
    }

    protected function scale_image_to_width($filename, $target_width)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename'     =>  DT::STRING,
                'target_width' =>  DT::UINT32
            ])
            ->call(__FUNCTION__)
            ->with($filename, $target_width)
            ->returning([DT::UINT32, DT::FLOAT]);
        }
        else
        {
            return scale_image_to_width($filename, $target_width);
        }
    }
}
