<?php

/**
 * Class File -Skyfire PHP
 *
 * File interface and function into object inherence
 */
class File extends Controller
{
    /**
     * @param $file_name
     * @param $extensions
     *
     * @return bool
     */
    protected function checkFileExt($file_name, $extensions)
    { return (bool) NULL; }

    /**
     * @param $path
     */
    protected function convertIniFileToConstants($path)
    { return NULL; }

    /**
     * @param $url
     * @param int $response_code
     *
     * @return bool
     */
    protected function fileContentsExist($url, $response_code = 200)
    { return (bool) NULL; }

    /**
     * @return string
     */
    protected function getCurrentPageUrl()
    { return (string) NULL; }

    /**
     * @param $filename
     */
    protected function getFileExt($filename)
    { return NULL; }

    /**
     * @param $uri
     *
     * @return bool|string
     */
    protected function getFileUriScheme($uri)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    /**
     * @param $uri
     *
     * @return bool|string
     */
    protected function getFileUriTarget($uri)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    /**
     * @param $url
     *
     * @return int
     */
    protected function getHttpResponseCode($url)
    { return (int) NULL; }

    /**
     * @param $url
     *
     * @return int
     */
    protected function getHttpsResponseCode($url)
    { return (int) NULL; }

    protected function includeIfExist($path)      {} // $this->include_if_exist()
    protected function includeOonceIfExist($path) {} // $this->include_once_if_exist()

    /**
     * @param $path
     *
     * @return bool
     */
    protected function isPathAbsolute($path)
    { return (bool) NULL; }

    /**
     * @param $directory
     * @param bool $recursive
     *
     * @return array
     */
    protected function listDirectory($directory, $recursive = FALSE)
    { return (array) NULL; }

    protected function requireIfExist($path)      {} // $this->require_if_exist()
    protected function requireOnceIfExist($path)  {} // $this->require_once_if_exist()

    /**
     * @param $text
     * @param $log_file
     */
    protected function writeLogError($text, $log_file)
    { return NULL; }
}
