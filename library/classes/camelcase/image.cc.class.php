<?php

/**
 * Class Image - Skyfire PHP
 *
 * Image interface and function into object inherence
 */
class Image extends Controller
{
    /**
     * @param $base64_string
     * @param bool $output_file
     *
     * @return string
     */
    protected function convertBase64Jpg($base64_string, $output_file = FALSE)
    { return (string) NULL; }

    /**
     * @param $data
     * @param $filename
     * @param string $extension
     * @param int $quality
     *
     * @return bool
     */
    protected function createImageFromBase64($data, $filename, $extension = 'jpg', $quality = 100)
    { return (bool) NULL; }

    /**
     * @param $hex
     * @param int $amount
     *
     * @return bool|string
     */
    protected function darkerHex($hex, $amount = 30)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $filename
     * @param int $max_w
     * @param null $max_h
     *
     * @return bool|null|object
     */
    protected function getImageScaleSize($filename, $max_w = 100, $max_h = NULL)
    { return (TRUE ? NULL : FALSE ? (bool) NULL : (object) NULL); }

    /**
     * @param $filename
     * @param $percentage
     *
     * @return bool|null|object
     */
    protected function getImageSizePercentage($filename, $percentage)
    { return (TRUE ? NULL : FALSE ? (bool) NULL : (object) NULL); }

    /**
     * @param $filename
     * @param $target_height
     *
     * @return float|int
     */
    protected function scaleImageToHeight($filename, $target_height)
    { return (NULL) ? (float) NULL : (int) NULL; }

    /**
     * @param $filename
     * @param $target_width
     *
     * @return float|int
     */
    protected function ScaleImageToWidth($filename, $target_width)
    { return (NULL) ? (float) NULL : (int) NULL; }
}
