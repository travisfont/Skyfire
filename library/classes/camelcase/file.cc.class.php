<?php

// Dates interface and function into object inherence

class File extends Controller
{
    static public function includeIfExist($path)      {} // $this->include_if_exist()
    static public function includeOonceIfExist($path) {} // $this->include_once_if_exist()
    static public function requireIfExist($path)      {} // $this->require_if_exist()
    static public function requireOnceIfExist($path)  {} // $this->require_once_if_exist()

    protected function writeLogError($text, $log_file)
    { return; }

    protected function getFileExt($filename)
    { return; }

    protected function convertIniFileToConstants($path)
    { return; }

    protected function listDirectory($directory, $recursive = FALSE)
    { return (array) NULL; }

    protected function getHttpResponseCode($url)
    { return (int) NULL; }

    protected function getHttpsResponseCode($url)
    { return (int) NULL; }

    protected function fileContentsExist($url, $response_code = 200)
    { return (bool) NULL; }

    protected function checkFileExt($file_name, $extensions)
    { return (bool) NULL; }

    protected function getFileUriScheme($uri)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    protected function getFileUriTarget($uri)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    protected function isPathAbsolute($path)
    { return (bool) NULL; }

    protected function getCurrentPageUrl()
    { return (string) NULL; }
}
