<?php

// String interface and function into object inherence

class Strings extends Controller
{
    protected function generatePassword($length = 9, $strength = 4)
    {
        return (string) self::parameters(array
        (
            'length'   => DT::UINT8,
            'strength' => DT::UINT8
        ))
        ->call(__FUNCTION__)
        ->with($length, $strength)
        ->returning(DT::STRING);
    }

    protected function generateRandomString($length = 8)
    {
        //return (string) generate_random_str($length);
        return (string) self::parameters(array
        (
            'length' => DT::UINT8
        ))
        ->call(__FUNCTION__)
        ->with($length)
        ->returning(DT::STRING);
    }

    protected function cleanStr($string)
    {
        return (string) self::parameters(array
        (
            'string' => DT::TEXT
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function hexToRgb($hex)
    {
        return (string) self::parameters(array
        (
            'hex' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($hex)
        ->returning(DT::STRING);
    }

    protected function isHex($hex)
    {
        return (bool) self::parameters(array
        (
            'hex' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($hex)
        ->returning(DT::BOOL);
    }

    protected function isUtf8($str)
    {
        return (bool) self::parameters(array
        (
            'str' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($str)
        ->returning(DT::BOOL);
    }

    protected function isValidUrl($url, $absolute = FALSE)
    {
        return (bool) self::parameters(array
        (
            'url'      => DT::STRING,
            'absolute' => DT::BOOL
        ))
        ->call(__FUNCTION__)
        ->with($url, $absolute)
        ->returning(DT::BOOL);
    }

    protected function isSerialized($string)
    {
        return (bool) self::parameters(array
        (
            'string' => DT::TEXT
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::BOOL);
    }

    protected function stripToNumeric($string)
    {
        //return strip_to_numeric($string);
        return self::parameters(array
        (
            'string' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning([DT::INT64, DT::STRING, DT::BOOL]);
    }

    protected function stripToInt($string)
    {
        return (int) self::parameters(array
        (
            'string' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::UBIGINT);
    }

    protected function strStartsUpperCase($string)
    {
        //return str_starts_uppercase($string);
        return (bool) self::parameters(array
        (
            'string' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::BOOL);
    }

    protected function removeDiacritics($string)
    {
        //return remove_diacritics($string);
        return (string) self::parameters(array
        (
            'string' => DT::STRING
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::STRING);
    }

    protected function removeFirstLine($string)
    {
        //return remove_first_line($string);
        return (string) self::parameters(array
        (
            'string' => DT::TEXT
        ))
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function sstToSlug($string)
    {
        //return sstr_to_slug($string);
        return (string) self::parameters(
        [
            'string' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::STRING);
    }

    protected function strToSlug($text, $strict = FALSE)
    {
        //return str_to_slug($text, $strict);
        return (string) self::parameters(array
        (
            'text'   => DT::STRING,
            'strict' => DT::BOOL
        ))
        ->call(__FUNCTION__)
        ->with($text, $strict)
        ->returning(DT::STRING);
    }

    protected function countStr($delimiter, $string)
    {
        //return count_str($delimiter, $string);
        return (int) self::parameters(
        [
            'delimiter' => DT::STRING,
            'string'    => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($delimiter, $string)
        ->returning(DT::UINT16);
    }

    protected function csubstr($string, $start, $length = FALSE, $safe_quotes = FALSE)
    {
        //return csubstr($string, $start, $length, $safe_quotes);
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

    protected function htmlSubstr($text, $length, $ending = '...', $exact = TRUE, $consider_html = FALSE)
    {
        //return html_substr($text, $length, $ending, $exact, $consider_html);
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

    protected function stripCarriageReturns($string)
    {
        //return strip_carriage_returns($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function replcaeCarriageReturn($replace, $string)
    {
        //return replace_carriage_return($replace, $string);
        return (string) self::parameters(
        [
            'replace' => DT::STRING,
            'string'  => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($replace, $string)
        ->returning(DT::TEXT);
    }

    protected function stripTabspaces($string)
    {
        //return strip_tabspaces($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function removeFirstOccurrence($string, $search, $times)
    {
        //return remove_first_occurrence($string, $search, $times);
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

    protected function SplitNumberStr($string)
    {
        //return split_number_str($string);
        return (array) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function splitNumberStrToArray($string)
    {
        //return split_number_str_to_array($string);
        return (array) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function lengthCutoffStr($string, $limit, $subtext = '...')
    {
        //return length_cutoff_str($string, $limit, $subtext);
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

    protected function lengthCutoffWord($string, $limit, $end_char = '...')
    {
        //return length_cutoff_word($string, $limit, $end_char);
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

    protected function joinNaturalLanguage(array $list, $conjunction = 'and')
    {
        //return join_natural_language($list, $conjunction);
        return (string) self::parameters(
        [
            'list'        => DT::TYPE_ARRAY,
            'conjunction' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($list, $conjunction)
        ->returning(DT::TEXT);
    }

    protected function emoji($text)
    {
        //return emoji($text);
        return (string) self::parameters(
        [
            'text' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($text)
        ->returning(DT::STRING);
    }

    protected function removeFromString($search, $string)
    {
        //return remove_from_string($search, $string);
        return (string) self::parameters(
        [
            'search' => DT::STRING,
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($search, $string)
        ->returning(DT::TEXT);
    }

    protected function padLeft($string, $key)
    {
        //return pad_left($string, $key);
        return (string) self::parameters(
        [
            'string' => DT::STRING,
            'key'    => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string, $key)
        ->returning(DT::STRING);
    }

    protected function padRight($string, $key)
    {
        //return pad_right($string, $key);
        return (string) self::parameters(
        [
            'string' => DT::STRING,
            'key'    => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string, $key)
        ->returning(DT::STRING);
    }

    protected function colorAbbr($abbr)
    {
        //return color_abbr($abbr);
        return (string) self::parameters(
        [
            'abbr' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($abbr)
        ->returning(DT::STRING);
    }

    protected function decamelize($string)
    {
        //return decamelize($string);
        return (string) self::parameters(
        [
            'string' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::STRING);
    }

    protected function camelize($string)
    {
        //return camelize($string);
        return (string) self::parameters(
        [
            'string' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::STRING);
    }

    protected function addLeadingZeros($number)
    {
        //return add_leading_zeros($number);
        return (string) self::parameters(
        [
            'number' => [DT::STRING|DT::UINT32]
        ])
        ->call(__FUNCTION__)
        ->with($number)
        ->returning(DT::STRING);
    }

    protected function safeWordTruncate($string = '', $chars = 255, $ellipsis = '...')
    {
        //return safe_word_truncate($string, $chars, $ellipsis);
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
}
