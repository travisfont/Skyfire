<?php

// CSV interface and function into object inherence

class Csv extends Controller
{
    /**
     * @var    file
     * @return array
     */
    protected function arrayGetCsv($data)
    {
        //return array_getcsv($data);
        return (array) self::parameters(
        [
            'data' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($data)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function CsvToArray($data)
    {
        //return csv_to_array($data);
        return (array) self::parameters(
        [
            'data' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($data)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function CsvToAssocArray($data)
    {
        //return csv_to_assoc_array($data);
        return (array) self::parameters(
        [
            'data' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($data)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function cvsFileToAssocArray($filename, $delimiter = ',')
    {
        //return cvs_file_to_assoc_array($filename, $delimiter);
        return self::parameters(
        [
            'filename'  => DT::STRING,
            'delimiter' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($filename, $delimiter)
        ->returning([DT::TYPE_ARRAY, DT::BOOL]);
    }

}
