<?php

/**
 * @param $string
 *
 * @return string
 */
function sstr_to_slug($string)
{
    return trim(preg_replace('/-+/', "-", preg_replace('/[^a-z0-9-]/', '-', strtolower(trim($string)))), "-");
}

// Simple str to slug
// $slug = simple_str_to_slug('This is my example title');
