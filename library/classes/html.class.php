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

    protected function compress_html($content)
    {
        return compress_html($content);
    }

    protected function minify_html($content)
    {
        return minify_html($content);
    }

    protected function minify_css($css)
    {
        return minify_css($css);
    }

    protected function minify_js($javascript)
    {
        return minify_js($javascript);
    }

    protected function is_input($html, $encoding = 'UTF-8')
    {
        return is_input($html, $encoding);
    }

    protected function is_select($html, $encoding = 'UTF-8')
    {
        return is_select($html, $encoding);
    }

    protected function get_element_all_attributes($tag_name, $html, $encoding = 'UTF-8')
    {
        return get_element_all_attributes($tag_name, $html, $encoding);
    }

    protected function parse_selector_values_by_name($name, $selector_html, $encoding = 'UTF-8')
    {
        return parse_selector_values_by_name($name, $selector_html, $encoding);
    }

    protected function parse_selector_values($selector_html, $encoding = 'UTF-8')
    {
        return parse_selector_values($selector_html, $encoding);
    }
}
