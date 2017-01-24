<?php

// CSV interface and function into object inherence

class SF_Csv extends Controller
{
    /**
     * @var    file
     * @return array
     */
    protected function array_getcsv($data)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'data' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($data)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) array_getcsv($data);
        }
    }

    protected function cvs_file_to_assoc_array($filename, $delimiter = ',')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'filename'  => DT::STRING,
                'delimiter' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($filename, $delimiter)
            ->returning([DT::TYPE_ARRAY, DT::BOOL]);
        }
        else
        {
            return cvs_file_to_assoc_array($filename, $delimiter);
        }
    }

    protected function csv_to_array($data)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'data' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($data)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return csv_to_array($data);
        }
    }

    protected function csv_to_assoc_array($data)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'data' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($data)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) csv_to_assoc_array($data);
        }
    }
}
