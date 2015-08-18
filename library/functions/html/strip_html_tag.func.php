<?php

function strip_html_tag($string, $tag)
{
    return preg_replace('/\s*<'.$tag.'[^>]*>[\S\s]*?<\/'.$tag.'>\s*/', '', $string);

    // $html = strip_html_tag::ul($string);
    //return preg_replace('/\s*<ul[^>]*>[\S\s]*?<\/ul>\s*/', '', $string);
}