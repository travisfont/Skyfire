<?php

/**
 * @param $string
 * @param $limit
 * @param string $subtext
 *
 * @return string
 */
function length_cutoff_str($string, $limit, $subtext = '...')
{
    return (string) (strlen($string) > $limit) ? substr($string, 0, ($limit - strlen($subtext))).$subtext : $string;
}

// example usage:
#echo str_length_cutoff('Michelle Lee Hammontree-Garcia', 26);

// or (for custom substitution text
#echo str_length_cutoff('Michelle Lee Hammontree-Garcia', 26, '..');
