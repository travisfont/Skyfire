<?php

/**
 * Converts a value to non-negative integer
 *
 * @param $number $data data to converted into a non-negative integer
 * @return int a non-negative integer
 */
function absint($number)
{
    return (int) abs(intval($number));
}
