<?php

// String interface and function into object inherence

class Strings extends Controller
{
    /*
    function __construct()
    {
        return array
        (
            'generate_password' => array
            (
                'length'   => DT::UTINYINT,
                'strength' => DT::UTINYINT

            ), DT::STRING,

            'clean_str' => array
            (
                '$string' => DT::STRING

            ), DT::STRING
        );
    }
    */

    // generatePassword
    protected function generate_password($length = 9, $strength = 4)
    {
        /*
        return self::define_parameters(array
        (
            'length'   => DT::UTINYINT,
            'strength' => DT::UTINYINT,
                          DT::STRING
        ),
        generate_password($length, $strength));
        */
        return generate_password($length, $strength);
    }

    // review: http://stackoverflow.com/questions/17455043/how-to-get-functions-parameters-names-in-php

    // cleanStr
    protected function clean_str($string)
    {
        return clean_str($string);
    }

    // hexToRgb
    protected function hex_to_rgb($hex)
    {
        return hex_to_rgb($hex);
    }

    // isHex
    protected function is_hex($hex)
    {
        return is_hex($hex);
    }

    protected function is_utf8($str)
    {
        return is_utf8($str);
    }

    protected function is_valid_url($url)
    {
        return is_valid_url($url);
    }

    // isSerialized
    protected function is_serialized($string)
    {
        return is_serialized($string);
    }

    // stripToNumeric
    protected function strip_to_numeric($string)
    {
        return strip_to_numeric($string);
    }

    // stripToInt
    protected function strip_to_int($string)
    {
        return strip_to_int($string);
    }

    // strStartsUpperCase
    protected function str_starts_uppercase($string)
    {
        return str_starts_uppercase($string);
    }

    protected function remove_diacritics($string)
    {
        return remove_diacritics($string);
    }

    protected function remove_first_line($string)
    {
        return remove_first_line($string);
    }

    protected function sstr_to_slug($string)
    {
        return sstr_to_slug($string);
    }

    protected function str_to_slug($text, $strict = FALSE)
    {
        return str_to_slug($text);
    }

    protected function str_length_cutoff($string, $limit, $subtext = '...')
    {
        return str_length_cutoff($string, $limit, $subtext);
    }

    protected function count_str($delimiter, $string)
    {
        return count_str($delimiter, $string);
    }

    protected function csubstr($string, $start, $length = FALSE, $safe_quotes = FALSE)
    {
        return csubstr($string, $start, $length, $safe_quotes);
    }

    protected function strip_carriage_returns($string)
    {
        return strip_carriage_returns($string);
    }

    protected function replace_carriage_return($replace, $string)
    {
        return replace_carriage_return($replace, $string);
    }

    protected function strip_tabspaces($string)
    {
        return strip_tabspaces($string);
    }

    protected function remove_first_occurrence($string, $search, $times)
    {
        return remove_first_occurrence($string, $search, $times);
    }

}