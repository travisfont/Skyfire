<?php

function csv_file_to_array($data)
{
    return array_map('str_getcsv', file($data));
}