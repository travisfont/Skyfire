<?php

function csv_to_array($data)
{
    return array_map('str_getcsv', $data);
}