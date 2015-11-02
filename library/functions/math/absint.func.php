<?php

/**
 * Converts a value to non-negative integer
 *
 * @param mixed $data data to converted into a non-negative integer
 * @return int a non-negative integer
 */

function absint($data)
{
    return (int) abs(intval($data));
}