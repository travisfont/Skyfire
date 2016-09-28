<?php

// HTML interface and function into object inherence

class HTML extends Controller
{
    protected function left_trim_br_tag($string)
    {
        //return left_trim_br_tag($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function replace_html_tag($string, $tag, $replace = '')
    {
        //return (string) replace_html_tag($string, $tag, $replace);
        return (string) self::parameters(
        [
            'string'  => DT::TEXT,
            'tag'     => DT::STRING,
            'replace' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string, $tag, $replace)
        ->returning(DT::TEXT);
    }

    protected function replace_multi_br_to_single($string)
    {
        //return (string) replace_multi_br_to_single($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function replace_p_to_br($string)
    {
        //return (string) replace_p_to_br($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function truncate_html($text, $length = 100, $ending = '...', $exact = FALSE, $consider_html = TRUE)
    {
        //return (string) truncate_html($text, $length, $ending, $exact, $consider_html);
        return (string) self::parameters(
        [
            'text'          => DT::TEXT,
            'length'        => DT::UINT32,
            'ending'        => DT::STRING,
            'exact'         => DT::BOOL,
            'consider_html' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($text, $length, $ending, $exact, $consider_html)
        ->returning(DT::TEXT);
    }

    protected function strip_html_tag($string, $tag)
    {
        //return (string) strip_html_tag($string, $tag);
        return (string) self::parameters(
        [
            'string' => DT::TEXT,
            'tag'    => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string, $tag)
        ->returning(DT::TEXT);
    }

    protected function strip_html_tag_styles($string)
    {
        //return (string) strip_html_tag_styles($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function strip_html_table($string)
    {
        //return (string) strip_html_table($string);
        return (string) self::parameters(
        [
            'string' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::TEXT);
    }

    protected function compress_html($content)
    {
        //return (string) compress_html($content);
        return (string) self::parameters(
        [
            'content' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($content)
        ->returning(DT::TEXT);
    }

    protected function minify_html($content)
    {
        //return (string) minify_html($content);
        return (string) self::parameters(
        [
            'content' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($content)
        ->returning(DT::TEXT);
    }

    protected function minify_css($css)
    {
        //return (string) minify_css($css);
        return (string) self::parameters(
        [
            'css' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($css)
        ->returning(DT::TEXT);
    }

    protected function minify_js($javascript)
    {
        //return (string) minify_js($javascript);
        return (string) self::parameters(
        [
            'javascript' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($javascript)
        ->returning(DT::TEXT);
    }

    protected function is_input($html, $encoding = 'UTF-8')
    {
        //return (bool) is_input($html, $encoding);
        return (bool) self::parameters(
        [
            'html'     => DT::TEXT,
            'encoding' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($html, $encoding)
        ->returning(DT::BOOL);
    }

    protected function is_select($html, $encoding = 'UTF-8')
    {
        //return (bool) is_select($html, $encoding);
        return (bool) self::parameters(
        [
            'html'     => DT::TEXT,
            'encoding' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($html, $encoding)
        ->returning(DT::BOOL);
    }

    protected function get_element_all_attributes($tag_name, $html, $encoding = 'UTF-8')
    {
        //return (array) get_element_all_attributes($tag_name, $html, $encoding);
        return (array) self::parameters(
        [
            'tag_name' => DT::STRING,
            'html'     => DT::TEXT,
            'encoding' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($tag_name, $html, $encoding)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function parse_selector_values_by_name($name, $selector_html, $encoding = 'UTF-8')
    {
        //return (array) parse_selector_values_by_name($name, $selector_html, $encoding);
        return (array) self::parameters(
        [
            'name'          => DT::STRING,
            'selector_html' => DT::TEXT,
            'encoding'      => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($name, $selector_html, $encoding)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function parse_selector_values($selector_html, $encoding = 'UTF-8')
    {
        //return (array) parse_selector_values($selector_html, $encoding);
        return (array) self::parameters(
        [
            'selector_html' => DT::TEXT,
            'encoding'      => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($selector_html, $encoding)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function safe_truncate($input, $break = ' ', $end_text = '...', $limit = 255, $tidy_html = TRUE, $strip_html = FALSE)
    {
        //return (string) safe_truncate($input, $break, $end_text, $limit, $tidy_html, $strip_html);
        return (string) self::parameters(
        [
            'input'      => DT::TEXT,
            'break'      => DT::STRING,
            'end_text'   => DT::STRING,
            'limit'      => DT::UINT32,
            'tidy_html'  => DT::BOOL,
            'strip_html' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($input, $break, $end_text, $limit, $tidy_html, $strip_html)
        ->returning(DT::TEXT);
    }

    protected function compress_css($buffer)
    {
        //return (string) compress_css($buffer);
        return (string) self::parameters(
        [
            'buffer' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($buffer)
        ->returning(DT::TEXT);
    }

    protected function br2nl($input)
    {
        //return (string) br2nl($input);
        return (string) self::parameters(
        [
            'input' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($input)
        ->returning(DT::TEXT);
    }
}
