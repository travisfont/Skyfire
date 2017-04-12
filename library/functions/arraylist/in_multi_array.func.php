<?php

/**
 * in_array version of multi-dim arrays
 *
 * @param $needle
 * @param array $haystack
 * @param bool $strict
 *
 * @return bool
 */
function in_multi_array($needle, array $haystack, $strict = FALSE)
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
