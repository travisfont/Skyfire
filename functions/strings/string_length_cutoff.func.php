<?php

function string_length_cutoff($string, $limit, $subtext = '...')
{
    return (strlen($string) > $limit) ? substr($string, 0, ($limit-strlen($subtext))).$subtext : $string;
}

// example usage:
#echo string_length_cutoff('Michelle Lee Hammontree-Garcia', 26);

// or (for custom substitution text
#echo string_length_cutoff('Michelle Lee Hammontree-Garcia', 26, '..');

?>