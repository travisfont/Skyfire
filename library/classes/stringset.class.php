<?php

/**
 * Class StringSet  - Skyfire PHP
 *
 * String interface and function into object inherence
 */
class StringSet extends Controller
{
    /**
     * @param $number
     * @param $strlen
     * @param int $leading
     *
     * @return string
     */
    protected function add_leading_zeros($number, $strlen, $leading = 0)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'number'  => [DT::STRING, DT::UINT32],
                'strlen'  =>  DT::UINT32,
                'leading' =>  DT::UINT32
            ])
            ->call(__FUNCTION__)
            ->with($number, $strlen, $leading)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) add_leading_zeros($number, $strlen, $leading);
        }
    }

    /**
     * @param array $values
     * @param int $valid_integer
     *
     * @return string
     */
    protected function allocate_values_to_stringlist($values = array(), $valid_integer = 1)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'values'        => DT::TYPE_ARRAY,
                'valid_integer' => DT::UINT32
            ])
            ->call(__FUNCTION__)
            ->with($values, $valid_integer)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) allocate_values_to_stringlist($values, $valid_integer);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $abbr
     *
     * @return string
     */
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

    /**
     * @param $delimiter
     * @param $string
     *
     * @return int
     */
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

    /**
     * @return string
     */
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

    /**
     * @param $string
     * @param $start
     * @param bool $length
     * @param bool $safe_quotes
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $text
     *
     * @return string
     */
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

    /**
     * @param int $length
     * @param int $strength
     *
     * @return string
     */
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

    /**
     * @param int $length
     *
     * @return string
     */
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

    /**
     * @param $hex
     * @param bool $string
     *
     * @return array|mixed|string
     */
    protected function hex_to_rgb($hex, $string = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'hex'    => DT::STRING,
                'string' => DT::BOOL,
            ])
            ->call(__FUNCTION__)
            ->with($hex, $string)
            ->returning([DT::STRING, DT::TYPE_ARRAY]);
        }
        else
        {
            return hex_to_rgb($hex, $string);
        }
    }

    /**
     * Substr for HTML
     *
     * Cuts a string to the length of $length and replaces the last characters
     * with the ending if the text is longer than length.
     *
     * @param string $text String to truncate.
     * @param integer $length Length of returned string, including ellipsis.
     * @param string $ending Ending to be appended to the trimmed string.
     * @param boolean $exact If false, $text will not be cut mid-word
     * @param boolean $consider_html If true, HTML tags would be handled correctly
     *
     * @return string Trimmed string.
     */
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

    /**
     * @param $hex
     *
     * @return bool
     */
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

    /**
     * Check whether string is serialized data
     *
     * @param string $string Serialized data
     * @param bool $hardcheck to use the actual serialize function
     *
     * @return bool False if not a serialized string, true if it is
     */
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

    /**
     * Check whether string is a valid SHA-1
     *
     * @param string $string SHA-1 string to validate
     *
     * @return bool False if not a SHA-1 string, true if it is
     */
    protected function is_sha1($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'string'    => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) s_sha1($string);
        }
    }

    /**
     * @param $str
     *
     * @return bool
     */
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

    /**
     * @param $address
     *
     * @return bool
     */
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

    /**
     * @param $url
     * @param bool $absolute
     *
     * @return bool
     */
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

    /**
     * @param array $list
     * @param string $conjunction
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $limit
     * @param string $subtext
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $limit
     * @param string $end_char
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $key
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $key
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $separator
     *
     * @return string
     */
    protected function remove_after($string, $separator)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING,
                'separator' => DT::STRING,
            ])
            ->call(__FUNCTION__)
            ->with($string, $separator)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) remove_after($string, $separator);
        }
    }

    /**
     * @param $string
     * @param $separator
     *
     * @return string
     */
    protected function remove_before($string, $separator)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::STRING,
                'separator' => DT::STRING,
            ])
            ->call(__FUNCTION__)
            ->with($string, $separator)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) remove_before($string, $separator);
        }
    }

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param $search
     * @param $times
     *
     * @return string
     */
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

    /**
     * @param $search
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     * @param bool $mb_strlen
     *
     * @return string
     */
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

    /**
     * @param $replace
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param string $string the input string
     * @param int $chars the length of characters wanted
     * @param string $ellipsis the ellipsis to be used, defaults to '...'
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
    protected function sanitize($string)
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
            return (string) sanitize($string);
        }
    }

    /**
     * @param $address
     *
     * @return bool
     */
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

    /**
     * @param $string
     *
     * @return array
     */
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

    /**
     * @param $string
     *
     * @return array
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
    protected function st12_hash($string)
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
            return (string) st12_hash($string);
        }
    }

    /**
     * @param $string
     *
     * @return bool
     */
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

    /**
     * @param $text
     * @param bool $strict
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $filename
     *
     * @return mixed
     */
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

    /**
     * @param $string
     *
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return int
     */
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

    /**
     * @param $string
     *
     * @return bool|float|int|mixed
     */
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

    /**
     * @param  $email string the email address to validate
     *
     * @return bool
     */
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

    /**
     * @param $string
     * @param $word_count
     *
     * @return string
     */
    protected function word_truncate($string, $word_count)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string'     => DT::TEXT,
                'word_count' => DT::UINT
            ])
            ->call(__FUNCTION__)
            ->with($string, $word_count)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) word_truncate($string, $word_count);
        }
    }

    /**
     * @param $string
     * @param $token
     *
     * @return string
     */
    protected  function substr_extract($string, $token)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'string' => DT::TEXT,
                'token'  => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string, $token)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) substr_extract($string, $token);
        }
    }
}
