<?php

// Dates interface and function into object inherence

class File extends Controller
{
    protected function check_file_ext($file_name, $extensions)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'file_name'  =>  DT::STRING,
                'extensions' => [DT::STRING, DT::TYPE_ARRAY]
            ])
            ->call(__FUNCTION__)
            ->with($file_name, $extensions)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) check_file_ext($file_name, $extensions);
        }
    }

    protected function convert_ini_file_to_constants($path)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'path' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($path)
            ->returning(DT::VOID);
        }
        else
        {
            return convert_ini_file_to_constants($path);
        }
    }

    protected function file_contents_exist($url, $response_code = 200)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'url'           => DT::STRING,
                'response_code' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($url, $response_code)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) file_contents_exist($url, $response_code);
        }
    }

    protected function get_current_page_url()
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters()->call(__FUNCTION__)
                                              ->returning(DT::STRING);
        }
        else
        {
            return (string) get_current_page_url();
        }
    }

    protected function get_file_ext($filename)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($filename)
            ->returning(DT::VOID);
        }
        else
        {
            return get_file_ext($filename);
        }
    }

    protected function get_file_uri_scheme($uri)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'uri' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($uri)
            ->returning([DT::BOOL, DT::STRING]);
        }
        else
        {
            return get_file_uri_scheme($uri);
        }
    }

    protected function get_file_uri_target($uri)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'uri' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($uri)
            ->returning([DT::BOOL, DT::STRING]);
        }
        else
        {
            return get_file_uri_target($uri);
        }
    }

    protected function get_http_response_code($url)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'url' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($url)
            ->returning(DT::UINT8);
        }
        else
        {
            return (int) get_http_response_code($url);
        }
    }

    protected function get_https_response_code($url)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'url' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($url)
            ->returning(DT::UINT8);
        }
        else
        {
            return (int) get_https_response_code($url);
        }
    }

    protected function include_if_exist($path)      {} // $this->include_if_exist()
    protected function include_once_if_exist($path) {} // $this->include_once_if_exist()

    protected function is_path_absolute($path)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'path' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($path)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_path_absolute($path);
        }
    }

    protected function list_directory($directory, $recursive = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'directory' => DT::STRING,
                'recursive' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($directory, $recursive)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) list_directory($directory, $recursive);
        }
    }

    protected function require_if_exist($path)      {} // $this->require_if_exist()
    protected function require_once_if_exist($path) {} // $this->require_once_if_exist()

    protected function write_log_error($text, $log_file)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'text'     => DT::TEXT,
                'log_file' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($text, $log_file)
            ->returning(DT::VOID);
        }
        else
        {
            return write_log_error($text, $log_file);
        }
    }
}
