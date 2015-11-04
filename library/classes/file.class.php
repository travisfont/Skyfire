<?php

// Dates interface and function into object inherence

class File extends Controller
{
    static public function includeIfExist($path){}      // $this->includeIfExist()
    static public function includ_onceIfExist($path){}  // $this->includ_onceIfExist()
    static public function requireIfExist($path){}      // $this->requireIfExist()
    static public function require_onceIfExist($path){} // $this->require_onceIfExist()

    protected function write_log_error($text, $log_file)
    {
        return write_log_error($text, $log_file);
    }

    protected function get_file_ext($filename)
    {
        return get_file_ext($filename);
    }

    // convertIniFileToConstants
    protected function convert_ini_file_to_constants($path)
    {
        return convert_ini_file_to_constants($path);
    }

    protected function list_directory($directory, $recursive = FALSE)
    {
        return list_directory($directory, $recursive);
    }

    // getHttpResponseCode
    protected function get_http_response_code($url)
    {
        return get_http_response_code($url);
    }

    // fileContentsExist
    protected function file_contents_exist($url, $response_code = 200)
    {
        return file_contents_exist($url, $response_code);
    }

    // checkFileExt
    protected function check_file_ext($file_name, $extensions)
    {
        return check_file_ext($file_name, $extensions);
    }

    // getFileUriScheme
    protected function get_file_uri_scheme($uri)
    {
        return get_file_uri_scheme($uri);
    }

    // getFileUriTarget
    protected function get_file_uri_target($uri)
    {
        return get_file_uri_target($uri);
    }

    // isPathAbsolute
    protected function is_path_absolute($path)
    {
        return is_path_absolute($path);
    }

    // getCurrentPageUrl
    protected function get_current_page_url()
    {
        return get_current_page_url();
    }
}