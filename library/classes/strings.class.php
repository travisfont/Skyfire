<?php

// String interface and function into object inherence

class Strings extends Controller
{
    // generatePassword
    protected function generate_password($length = 9, $strength = 4)
    {
        return (string) self::parameters(array
        (
            'length'   => DT::INT8,
            'strength' => DT::INT8
        ))->call(__FUNCTION__)
            ->with($length, $strength);

        /*
         ))->call(__FUNCTION__)
          ->with($length, $strength)
          ->then_return(DT::STRING);
         */

        // review: http://stackoverflow.com/questions/17455043/how-to-get-functions-parameters-names-in-php
    }

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

    protected function is_valid_url($url, $absolute = FALSE)
    {
        return is_valid_url($url, $absolute);
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

    // removeDiacritics
    protected function remove_diacritics($string)
    {
        return remove_diacritics($string);
    }

    // removeFirstLine
    protected function remove_first_line($string)
    {
        return remove_first_line($string);
    }

    // sstToSlug
    protected function sstr_to_slug($string)
    {
        return sstr_to_slug($string);
    }

    // strToSlug
    protected function str_to_slug($text, $strict = FALSE)
    {
        return str_to_slug($text);
    }

    // countStr
    protected function count_str($delimiter, $string)
    {
        return count_str($delimiter, $string);
    }

    // csubstr
    protected function csubstr($string, $start, $length = FALSE, $safe_quotes = FALSE)
    {
        return csubstr($string, $start, $length, $safe_quotes);
    }

    // htmlSubstr
    protected function html_substr($text, $length, $ending = '...', $exact = TRUE, $consider_html = FALSE)
    {
        return html_substr($text, $length, $ending, $exact, $consider_html);
    }

    // stripCarriageReturns
    protected function strip_carriage_returns($string)
    {
        return strip_carriage_returns($string);
    }

    // replcaeCarriageReturn
    protected function replace_carriage_return($replace, $string)
    {
        return replace_carriage_return($replace, $string);
    }

    // stripTabspaces
    protected function strip_tabspaces($string)
    {
        return strip_tabspaces($string);
    }

    // removeFirstOccurrence
    protected function remove_first_occurrence($string, $search, $times)
    {
        return remove_first_occurrence($string, $search, $times);
    }

    // SplitNumberStr
    protected function split_number_str($string)
    {
        return split_number_str($string);
    }

    // splitNumberStrToArray
    protected function split_number_str_to_array($string)
    {
        return split_number_str_to_array($string);
    }

    // lengthCutoffStr
    protected function length_cutoff_str($string, $limit, $subtext = '...')
    {
        return length_cutoff_str($string, $limit, $subtext);
    }

    // lengthCutoffWord
    protected function length_cutoff_word($string, $limit, $end_char = '...')
    {
        return length_cutoff_word($string, $limit, $end_char);
    }

    // joinNaturalLanguage
    protected function join_natural_language(array $list, $conjunction = 'and')
    {
        return join_natural_language($list, $conjunction);
    }

    protected function emoji($text)
    {
        return emoji($text);
    }

    protected function remove_from_string($search, $string)
    {
        return remove_from_string($search, $string);
    }

    protected function pad_left($string, $key)
    {
        return pad_left($string, $key);
    }

    protected function pad_right($string, $key)
    {
        return pad_right($string, $key);
    }

    // colorAabbr
    protected function color_abbr($abbr)
    {
        return color_abbr($abbr);
    }

    protected function decamelize($string)
    {
        return decamelize($string);
    }

    protected function camelize($string)
    {
        return camelize($string);
    }
}
