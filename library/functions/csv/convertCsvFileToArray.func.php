<?php

// Convert CSV file to an array

function convertCsvFileToArray($data)
{
    return array_map('str_getcsv', file($data));
}