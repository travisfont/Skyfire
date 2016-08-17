<?php

// Dates interface and function into object inherence

class File extends Controller
{
    static public function include_if_exist($path)      {} // $this->include_if_exist()
    static public function include_once_if_exist($path) {} // $this->include_once_if_exist()
    static public function require_if_exist($path)      {} // $this->require_if_exist()
    static public function require_once_if_exist($path) {} // $this->require_once_if_exist()

    protected function write_log_error($text, $log_file)
    {
        //return write_log_error($text, $log_file);
        return self::parameters(
        [
            'text'     => DT::TEXT,
            'log_file' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($text, $log_file)
        ->returning(DT::VOID);
    }

    protected function get_file_ext($filename)
    {
        //return get_file_ext($filename);
        return self::parameters(
        [
            'filename' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($filename)
        ->returning(DT::VOID);
    }

    // convertIniFileToConstants
    protected function convert_ini_file_to_constants($path)
    {
        //return convert_ini_file_to_constants($path);
        return self::parameters(
        [
            'path' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($path)
        ->returning(DT::VOID);
    }

    protected function list_directory($directory, $recursive = FALSE)
    {
        //return (array) list_directory($directory, $recursive);
        return (array) self::parameters(
        [
            'directory' => DT::STRING,
            'recursive' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($directory, $recursive)
        ->returning(DT::TYPE_ARRAY);
    }

    // getHttpResponseCode
    protected function get_http_response_code($url)
    {
        return (int) get_http_response_code($url);
        return (int) self::parameters(
        [
            'url' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($url)
        ->returning(DT::UINT8);
    }

    // getHttpsResponseCode
    protected function get_https_response_code($url)
    {
        //return (int) get_https_response_code($url);
        return (int) self::parameters(
        [
            'url' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($url)
        ->returning(DT::UINT8);
    }

    // fileContentsExist
    protected function file_contents_exist($url, $response_code = 200)
    {
        //return (bool) file_contents_exist($url, $response_code);
        return (bool) self::parameters(
        [
            'url'           => DT::STRING,
            'response_code' => DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($url, $response_code)
        ->returning(DT::BOOL);
    }

    // checkFileExt
    protected function check_file_ext($file_name, $extensions)
    {
        //return (bool) check_file_ext($file_name, $extensions);
        return (bool) self::parameters(
        [
            'file_name'  =>  DT::STRING,
            'extensions' => [DT::STRING, DT::TYPE_ARRAY]
        ])
        ->call(__FUNCTION__)
        ->with($file_name, $extensions)
        ->returning(DT::BOOL);
    }

    // getFileUriScheme
    protected function get_file_uri_scheme($uri)
    {
        //return get_file_uri_scheme($uri);
        return self::parameters(
        [
            'uri' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($uri)
        ->returning([DT::BOOL, DT::STRING]);
    }

    // getFileUriTarget
    protected function get_file_uri_target($uri)
    {
        //return get_file_uri_target($uri);
        return self::parameters(
        [
            'uri' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($uri)
        ->returning([DT::BOOL, DT::STRING]);
    }

    // isPathAbsolute
    protected function is_path_absolute($path)
    {
        //return is_path_absolute($path);
        return (bool) self::parameters(
        [
            'path' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($path)
        ->returning(DT::BOOL);
    }

    // getCurrentPageUrl
    protected function get_current_page_url()
    {
        //return (string) get_current_page_url();
        return (string) self::parameters()->call(__FUNCTION__)
                                          ->returning(DT::STRING);
    }
}
