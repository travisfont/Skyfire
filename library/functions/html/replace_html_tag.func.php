<?php

/**
 * @param $string
 * @param $tag
 * @param string $replace
 *
 * @return string
 */
function replace_html_tag($string, $tag, $replace = '')
{
    $string = preg_replace('@\<'.$tag.'([^>]*)>(.*?)@i',  $replace, $string);
    $string = preg_replace('@\<'.$tag.'([^>]*)/>(.*?)@i', $replace, $string);

    return (string) preg_replace('@\</'.$tag.'([^>]*)>(.*?)@i', $replace, $string);
}
