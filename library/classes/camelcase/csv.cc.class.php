<?php

// CSV interface and function into object inherence

class SF_Csv extends Controller
{
    /**
     * @var    file
     * @return array
     */
    protected function arrayGetCsv($data)
    { return (array) NULL; }

    protected function cvsFileToAssocArray($filename, $delimiter = ',')
    { return var_export(NULL); }

    protected function CsvToArray($data)
    { return (array) NULL; }

    protected function CsvToAssocArray($data)
    { return (array) NULL; }
}
