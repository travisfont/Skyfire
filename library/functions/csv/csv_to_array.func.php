<?php

function csv_to_array($data)
{
    return (array) array_map('str_getcsv', $data);
}
