<?php

/**
 * Determine if all given needles are present in the haystack as array keys
 *
 * @param array $needles
 * @param array $haystack
 *
 * @return bool
 */

function array_keys_exist(array $needles, array $haystack)
{
    return (bool) count(array_intersect($needles, array_keys($haystack))) === count($needles);
}
