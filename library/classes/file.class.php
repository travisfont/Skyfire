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

    /**
     * @param $path
     *
     * @return void
     */
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

    /**
     * @param $url
     * @param int $response_code
     *
     * @return bool
     */
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

    /**
     * @return string
     */
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

    /**
     * @param $filename
     * @return bool|string
     */
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

    /**
     * Returns the scheme of a URI (e.g. a stream)
     *
     * @param $uri A stream, referenced as "scheme://target".
     *
     * @return bool|string
     * A string containing the name of the scheme, or FALSE if none. For example,
     *   the URI "public://example.txt" would return "public".
     */
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

    /**
     * Returns the part of a URI after the schema.
     *
     * @param $uri
     *   A stream, referenced as "scheme://target".
     *
     * @return
     *   A string containing the target (path), or FALSE if none.
     *   For example, the URI "public://sample/test.txt" would return
     *   "sample/test.txt".
     */
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

    /**
     * @param $url
     *
     * @return int
     */
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

    /**
     * @param $url
     *
     * @return int
     */
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

    protected function include_if_exist($path)         {} // $this->include_if_exist()
    protected function include_once_if_exist($path)    {} // $this->include_once_if_exist()
    protected function include_once_when($path, $true) {}

    /**
     * Test if a give filesystem path is absolute
     * For example, '/foo/bar', or 'c:\windows'
     *
     * @param string $path File path
     *
     * @return bool True if path is absolute, false is not absolute
     */
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

    /**
     * Lists contens of a given directory and returns array with entries
     *
     * @param   $directory  string source path of the root directory
     * @param   $recursive  bool   to continue to return subdirectories
     *
     * @return  array  directory entries
     */
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

    protected function require_if_exist($path)         {} // $this->require_if_exist()
    protected function require_once_if_exist($path)    {} // $this->require_once_if_exist()
    protected function require_when($path, $true)      {}
    protected function require_once_when($path, $true) {}

    /**
     * @param $text
     * @param $log_file
     *
     * @return void
     */
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
