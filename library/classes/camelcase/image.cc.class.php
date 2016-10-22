<?php

// Image interface and function into object inherence

class Image extends Controller
{
    protected function convertBase64Jpg($base64_string, $output_file = FALSE)
    { return (string) NULL; }

    protected function createImageFromBase64($data, $filename, $extension = 'jpg', $quality = 100)
    { return (bool) NULL; }

    protected function darkerHex($hex, $amount = 30)
    { return var_export(NULL); }

    protected function getImageScaleSize($filename, $max_w = 100, $max_h = NULL)
    { return var_export(NULL); }

    protected function getImageSizePercentage($filename, $percentage)
    { return var_export(NULL); }

    protected function scaleImageToHeight($filename, $target_height)
    { return var_export(NULL); }

    protected function ScaleImageToWidth($filename, $target_width)
    { return var_export(NULL); }
}
