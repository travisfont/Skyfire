<?php

/**
 * Convert CSV file to an array
 *
 * @param $data
 *
 * @return array
 */
function array_getcsv($data)
{
    return (array) array_map('str_getcsv', file($data));
}
