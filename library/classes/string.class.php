<?php

// String interface and function into object inherence

class SF_String extends Controller
{
    protected function add_leading_zeros($number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'number' => [DT::STRING,DT::UINT32]
            ])
            ->call(__FUNCTION__)
            ->with($number)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) add_leading_zeros($number);
        }
    }

    protected function camelize($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) camelize($string);
        }
    }

    protected function clean_str($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) clean_str($string);
        }
    }

    protected function color_abbr($abbr)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'abbr' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($abbr)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) color_abbr($abbr);
        }
    }

    protected function count_str($delimiter, $string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'delimiter' => DT::STRING,
                'string'    => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($delimiter, $string)
            ->returning(DT::UINT16);
        }
        else
        {
            return (int) count_str($delimiter, $string);
        }
    }

    protected function create_md5_timestamp()
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters()->call(__FUNCTION__)
                                              ->returning(DT::STRING);
        }
        else
        {
            return (string) create_md5_timestamp();
        }
    }

    protected function csubstr($string, $start, $length = FALSE, $safe_quotes = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'      =>  DT::TEXT,
                'start'       =>  DT::UINT8,
                'length'      => [DT::UINT8, DT::BOOL],
                'safe_quotes' =>  DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($string, $start, $length, $safe_quotes)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) csubstr($string, $start, $length, $safe_quotes);
        }
    }

    protected function decamelize($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) decamelize($string);
        }
    }

    protected function emoji($text)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'text' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($text)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) emoji($text);
        }
    }

    protected function generate_password($length = 9, $strength = 4)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'length'   => DT::UINT8,
                'strength' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($length, $strength)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) generate_password($length, $strength);
        }
    }

    protected function generate_random_str($length = 8)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'length' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($length)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) generate_random_str($length);
        }
    }

    protected function hex_to_rgb($hex, $string = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'hex' => DT::STRING,
                'hex' => DT::BOOL,
            ])
            ->call(__FUNCTION__)
            ->with($hex)
            ->returning([DT::STRING, DT::TYPE_ARRAY]);
        }
        else
        {
            return hex_to_rgb($hex, $string);
        }
    }

    protected function html_substr($text, $length, $ending = '...', $exact = TRUE, $consider_html = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'text'          => DT::TEXT,
                'length'        => DT::UINT8,
                'ending'        => DT::STRING,
                'exact'         => DT::BOOL,
                'consider_html' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($text, $length, $ending, $exact, $consider_html)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) html_substr($text, $length, $ending, $exact, $consider_html);
        }
    }

    protected function is_hex($hex)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'hex' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($hex)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_hex($hex);
        }
    }

    protected function is_serialized($string, $hardcheck = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'string'    => DT::TEXT,
                'hardcheck' => DT::BOOL
            ])
                ->call(__FUNCTION__)
                ->with($string, $hardcheck)
                ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_serialized($string, $hardcheck);
        }
    }

    protected function is_utf8($str)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'str' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($str)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_utf8($str);
        }
    }

    protected function is_valid_ip($address)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'address' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($address)
            ->returning(DT::BOOL);
        }
        else
        {
            return (booL) is_valid_ip($address);
        }
    }

    protected function is_valid_url($url, $absolute = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'url'      => DT::STRING,
                'absolute' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($url, $absolute)
            ->returning(DT::BOOL);
        }
        else
        {
            return (booL) is_valid_url($url, $absolute);
        }
    }

    protected function join_natural_language(array $list, $conjunction = 'and')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'list'        => DT::TYPE_ARRAY,
                'conjunction' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($list, $conjunction)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) join_natural_language($list, $conjunction);
        }
    }

    protected function length_cutoff_str($string, $limit, $subtext = '...')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'  => DT::TEXT,
                'limit'   => DT::UINT8,
                'subtext' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $limit, $subtext)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) length_cutoff_str($string, $limit, $subtext);
        }
    }

    protected function length_cutoff_word($string, $limit, $end_char = '...')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'   => DT::STRING,
                'limit'    => DT::UINT8,
                'end_char' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $limit, $end_char)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) length_cutoff_word($string, $limit, $end_char);
        }
    }

    protected function pad_left($string, $key)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING,
                'key'    => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $key)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) pad_left($string, $key);
        }
    }

    protected function pad_right($string, $key)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING,
                'key'    => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $key)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) pad_right($string, $key);
        }
    }

    protected function remove_diacritics($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) remove_diacritics($string);
        }
    }

    protected function remove_first_line($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [

                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) remove_first_line($string);
        }
    }

    protected function remove_first_occurrence($string, $search, $times)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT,
                'search' => DT::STRING,
                'times'  => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($string, $search, $times)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) remove_first_occurrence($string, $search, $times);
        }
    }

    protected function remove_from_string($search, $string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'search' => DT::STRING,
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($search, $string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) remove_from_string($search, $string);
        }
    }

    protected function repair_serialize_str($string, $mb_strlen = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'    => DT::TEXT,
                'mb_strlen' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($string, $mb_strlen)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) repair_serialize_str($string, $mb_strlen);
        }
    }

    protected function replace_carriage_return($replace, $string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'replace' => DT::STRING,
                'string'  => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($replace, $string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) replace_carriage_return($replace, $string);
        }
    }

    protected function safe_word_truncate($string = '', $chars = 255, $ellipsis = '...')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'   => DT::TEXT,
                'chars'    => DT::UINT16,
                'ellipsis' => DT::STRING,
            ])
            ->call(__FUNCTION__)
            ->with($string, $chars, $ellipsis)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) safe_word_truncate($string, $chars, $ellipsis);
        }
    }

    protected function simple_address_verify($address)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'address' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($address)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) simple_address_verify($address);
        }
    }

    protected function split_number_str($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) split_number_str($string);
        }
    }

    protected function split_number_str_to_array($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) split_number_str_to_array($string);
        }
    }

    protected function sstr_to_slug($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [

                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) sstr_to_slug($string);
        }
    }

    protected function str_starts_uppercase($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [

                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) str_starts_uppercase($string);
        }
    }

    protected function str_to_slug($text, $strict = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'text'   => DT::STRING,
                'strict' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($text, $strict)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) str_to_slug($text, $strict);
        }
    }

    protected function strip_carriage_returns($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) strip_carriage_returns($string);
        }
    }

    protected function strip_file_ext($filename)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($filename)
            ->returning(DT::MIXED);
        }
        else
        {
            return strip_file_ext($filename);
        }
    }

    protected function strip_tabspaces($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) strip_tabspaces($string);
        }
    }

    protected function strip_to_int($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::UBIGINT);
        }
        else
        {
            return (int) strip_to_int($string);
        }
    }

    protected function strip_to_numeric($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'string' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning([DT::INT64, DT::FLOAT, DT::BOOL]);
        }
        else
        {
            return strip_to_numeric($string);
        }
    }

    protected function valid_email($email)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                '$email' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($email)
            ->returning(DT::BOOL);
        }
        else
        {
            return valid_email($email);
        }
    }
}
