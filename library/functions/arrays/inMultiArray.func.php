<?php

// in_array version of multi-dim arrays

function inMultiArray($needle, $haystack, $strict = FALSE)
{
    foreach ($haystack as $item)
    {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_multi_array($needle, $item, $strict)))
        {
            return TRUE;
        }
    }

    return FALSE;
}