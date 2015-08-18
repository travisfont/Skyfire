<?php

// HTML interface and function into object inherence

class HTML extends Controller
{
    protected function left_trim_br_tag($string)
    {
        return left_trim_br_tag($string);
    }

    protected function replace_html_tag($string, $tag, $replace = '')
    {
        return replace_html_tag($string, $tag, $replace);
    }

    protected function replace_multi_br_to_single($string)
    {
        return replace_multi_br_to_single($string);
    }

    protected function replace_p_to_br($string)
    {
        return replace_p_to_br($string);
    }

    protected function truncate_html($text, $length = 100, $ending = '...', $exact = FALSE, $considerHtml = TRUE)
    {
        return truncate_html($text, $length, $ending, $exact, $considerHtml);
    }

    protected function strip_html_tag($string, $tag)
    {
        return strip_html_tag($string, $tag);
    }

    protected function strip_html_tag_styles($string)
    {
        return strip_html_tag_styles($string);
    }

    protected function strip_html_table($string)
    {
        return strip_html_table($string);
    }
}