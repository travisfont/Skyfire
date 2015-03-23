<?php

function simple_str_to_slug($string)
{
    return trim($preg_replace('/-+/', "-", preg_replace('/[^a-z0-9-]/', '-', strtolower(trim($string)))),"-");
}

// $slug = str_to_slug('This is my example title'); 