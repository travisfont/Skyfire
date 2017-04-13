<?php

/**
 * Class Csv - Skyfire PHP
 *
 * CSV interface and function into object inherence
 */
class Csv extends Controller
{
    /**
     * @param $data
     *
     * @return array
     */
    protected function arrayGetCsv($data)
    { return (array) NULL; }

    /**
     * @param $filename
     * @param string $delimiter
     *
     * @return array|bool
     */
    protected function cvsFileToAssocArray($filename, $delimiter = ',')
    { return (NULL) ? (bool) NULL : (array) NULL; }

    /**
     * @param $data
     *
     * @return array
     */
    protected function CsvToArray($data)
    { return (array) NULL; }

    /**
     * @param $data
     *
     * @return array
     */
    protected function CsvToAssocArray($data)
    { return (array) NULL; }
}
