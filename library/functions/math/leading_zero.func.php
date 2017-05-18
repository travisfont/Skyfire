<?php

/**
 * Adds leading zeros to any integer value
 *
 * @param $num
 * @param int $places
 *
 * @return string
 */
function leading_zero($num, $places = 0)
{
    return (string) str_pad($num, $places, '0', STR_PAD_LEFT);
}

// Example:
#echo leading_zero(123, 5);
// Displays 00123
