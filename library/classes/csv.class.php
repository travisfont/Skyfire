<?php

// CSV interface and function into object inherence

class Csv extends Controller
{
    // arrayGetCsv
    /**
     * @var    file
     * @return array
     */
    protected function array_getcsv($data)
    {
        return array_getcsv($data);
    }

    // CsvToArray
    protected function csv_to_array($data)
    {
        return csv_to_array($data);
    }

    // CsvToAssocArray
    protected function csv_to_assoc_array($data)
    {
        return csv_to_assoc_array($data);
    }

    // cvsFileToAssocArray
    protected function cvs_file_to_assoc_array($filename, $delimiter)
    {
        return cvs_file_to_assoc_array($filename, $delimiter = ',');
    }

}