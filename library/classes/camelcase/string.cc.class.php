<?php

// String interface for IDE

class SF_String extends Controller
{
    protected function addLeadingZeros($number)
    { return (string) NULL; }

    protected function cleanStr($string)
    { return (string) NULL; }

    protected function colorAbbr($abbr)
    { return (string) NULL; }

    protected function countStr($delimiter, $string)
    { return (int) NULL; }

    protected function createMd5Timestamp()
    { return (string) NULL; }

    protected function generatePassword($length = 9, $strength = 4)
    { return (string) NULL; }

    protected function generateRandomStr($length = 8)
    { return (string) NULL; }

    protected function hexToRgb($hex, $string)
    { return (NULL) ? (string) NULL : (array) NULL; }

    protected function htmlSubstr($text, $length, $ending = '...', $exact = TRUE, $consider_html = FALSE)
    { return (string) NULL; }

    protected function isHex($hex)
    { return (bool) NULL; }

    protected function isSerialized($string, $hardcheck = FALSE)
    { return (bool) NULL; }

    protected function isUtf8($str)
    { return (bool) NULL; }

    protected function isValidIp($address)
    { return (bool) NULL; }

    protected function isValidUrl($url, $absolute = FALSE)
    { return (bool) NULL; }

    protected function joinNaturalLanguage(array $list, $conjunction = 'and')
    { return (string) NULL; }

    protected function lengthCutoffStr($string, $limit, $subtext = '...')
    { return (string) NULL; }

    protected function lengthCutoffWord($string, $limit, $end_char = '...')
    { return (string) NULL; }

    protected function padLeft($string, $key)
    { return (string) NULL; }

    protected function padRight($string, $key)
    { return (string) NULL; }

    protected function removeDiacritics($string)
    { return (string) NULL; }

    protected function removeFirstLine($string)
    { return (string) NULL; }

    protected function removeFirstOccurrence($string, $search, $times)
    { return (string) NULL; }

    protected function removeFromString($search, $string)
    { return (string) NULL; }

    protected function repairSerializeStr($string, $mb_strlen = FALSE)
    { return (string) NULL; }

    protected function replcaeCarriageReturn($replace, $string)
    { return (string) NULL; }

    protected function safeWordTruncate($string = '', $chars = 255, $ellipsis = '...')
    { return (string) NULL; }

    protected function simpleAddressVerify($address)
    { return (bool) NULL; }

    protected function splitNumberStr($string)
    { return (array) NULL; }

    protected function splitNumberStrToArray($string)
    { return (array) NULL; }

    protected function sstToSlug($string)
    { return (string) NULL; }

    protected function strStartsUpperCase($string)
    { return (bool) NULL; }

    protected function strToSlug($text, $strict = FALSE)
    { return (string) NULL; }

    protected function stripCarriageReturns($string)
    { return (string) NULL; }

    protected function stripFileExt()
    { return NULL; } // mixed

    protected function stripTabspaces($string)
    { return (string) NULL; }

    protected function stripToInt($string)
    { return (int) NULL; }

    protected function stripToNumeric($string)
    { return (TRUE ? (int) NULL :  FALSE ? (float) NULL : (bool) NULL); }

    protected function validEmail($email)
    { return (bool) NULL; }
}
