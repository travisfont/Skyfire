<?php

function strip_html_tag_styles($string)
{
    return preg_replace('/(<[^>]+) style=".*?"/i', '$1', $string);

    /*
    $domd = new DOMDocument();
    libxml_use_internal_errors(true);
    $domd->loadHTML($string);
    libxml_use_internal_errors(false);

    $domx = new DOMXPath($domd);
    $items = $domx->query("//p[@style]");

    foreach ($items as $item)4
    {
        $item->removeAttribute("style");
    }

    return $domd->saveHTML();
    */
}
