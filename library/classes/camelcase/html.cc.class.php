<?php

// HTML interface and function into object inherence

class HTML extends Controller
{
    protected function leftTrimBrTag($string)
    { return (string) NULL; }

    protected function replaceHtmlTag($string, $tag, $replace = '')
    { return (string) NULL; }

    protected function replaceMultiBrToSingle($string)
    { return (string) NULL; }

    protected function replacePToBr($string)
    { return (string) NULL; }

    protected function truncateHtml($text, $length = 100, $ending = '...', $exact = FALSE, $consider_html = TRUE)
    { return (string) NULL; }

    protected function stripHtmlTag($string, $tag)
    { return (string) NULL; }

    protected function stripHtmlTagStyles($string)
    { return (string) NULL; }

    protected function stripHtmlTable($string)
    { return (string) NULL; }

    protected function compressHtml($content)
    { return (string) NULL; }

    protected function minifyHtml($content)
    { return (string) NULL; }

    protected function minifyCss($css)
    { return (string) NULL; }

    protected function minifyJs($javascript)
    { return (string) NULL; }

    protected function isInput($html, $encoding = 'UTF-8')
    { return (bool) NULL; }

    protected function isSelect($html, $encoding = 'UTF-8')
    { return (bool) NULL; }

    protected function getElementAllAttributes($tag_name, $html, $encoding = 'UTF-8')
    { return (array) NULL; }

    protected function parseSelectorValuesByName($name, $selector_html, $encoding = 'UTF-8')
    { return (array) NULL; }

    protected function parseSelectorValues($selector_html, $encoding = 'UTF-8')
    { return (array) NULL; }

    protected function safeTruncate($input, $break = ' ', $end_text = '...', $limit = 255, $tidy_html = TRUE, $strip_html = FALSE)
    { return (string) NULL; }

    protected function compressCss($buffer)
    { return (string) NULL; }
}
