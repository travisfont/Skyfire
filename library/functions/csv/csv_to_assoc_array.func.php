<?php

function csv_to_assoc_array($data)
{
    $array = array();
    $data  = str_getcsv($data, "\n");

    if (count($data) > 0)
    {
        $string_header = $data[0];

        unset($data[0]);

        // cleaning up the header elements a bit
        $string_header = trim($string_header, '"');
        $string_header = preg_replace("/[^a-z0-9,_ ]/i", "", $string_header);
        $array_header  = str_getcsv($string_header);

        foreach (array_map('str_getcsv', $data) as $line_data)
        {
            $array[] = array_combine($array_header, $line_data);
        }
    }

    return (array) $array;
}
