<?php

// Convert CSV file to an array

function array_getcsv($data)
{
    return array_map('str_getcsv', file($data));
}