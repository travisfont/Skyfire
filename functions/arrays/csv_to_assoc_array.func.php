<?php

function csv_to_assoc_array($data)
{
    $array = array();
    $data = str_getcsv($data, "\n");

    if(count($data) > 0)
    {
        $sHeader = $data[0];
        unset($data[0]);

        // cleaning up the header elements a bit
        $sHeader = trim($sHeader, '"');
        $sHeader = preg_replace("/[^a-z0-9,_ ]/i", "", $sHeader);
        $aHeader = str_getcsv($sHeader);

        foreach (array_map('str_getcsv', $data) as $lineData)
        {
            $array[] = array_combine($aHeader, $lineData);
        }
    }

    return $array;
}