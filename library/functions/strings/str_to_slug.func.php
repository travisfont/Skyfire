<?php 

function str_to_slug($text, $strict = FALSE)
{
    $text = html_entity_decode($text, ENT_QUOTES, 'UTF-8');

    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d.]+~u', '-', $text);

    // trim
    $text = trim($text, '-');
    setlocale(LC_CTYPE, 'en_GB.utf8');

    // transliterate
    if (function_exists('iconv'))
    {
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }

    // remove unwanted characters + lowercase
    $text = preg_replace('~[^-\w.]+~', '', strtolower($text));

    if ($strict)
    {
        $text = str_replace(".", "_", $text);
    }

    return $text;
}
