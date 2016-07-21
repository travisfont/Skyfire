<?php

// Array interface and function into object inherence

class Arrays extends Controller
{
    protected function randomizeArray(array $arr, $amount = 1)
    {
        //return randomize_array($arr, $amount);
        return (array) self::parameters(
        [
            'arr'    => DT::TYPE_ARRAY,
            'amount' => DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($arr, $amount)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function randomizeArrayElement(array $array)
    {
        //return randomize_array_element($array);
        return self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::MIXED);
    }

    protected function subsortArray(array $array, $subkey)
    {
        //return subsort_array($array, $subkey);
        return (array) self::parameters(
        [
            'array'  => DT::TYPE_ARRAY,
            'subkey' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($array, $subkey)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function convertArrayToObject(array $array)
    {
        //return convert_array_to_object($array);
        return self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::MIXED);
    }

    protected function inMultiArray($needle, $haystack, $strict = FALSE)
    {
        //return in_multi_array($needle, $haystack, $strict);
        return (bool) self::parameters(
        [
            'needle'   => DT::MIXED,
            'haystack' => DT::TYPE_ARRAY,
            'strict'   => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($needle, $haystack, $strict)
        ->returning(DT::BOOL);
    }

    protected function isAssociativeArray($array)
    {
        //return is_associate_array($array);
        return (bool) self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::BOOL);
    }

    protected function trimArrayValues($array)
    {
        //return trim_array_values($array);
        return (array) self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function transposeData(array $array)
    {
        //return transpose_data($array);
        return (array) self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function multiExplode(array $delimiters, $string)
    {
        //return multi_explode($delimiters, $string);
        return (array) self::parameters(
        [
            'delimiters' => DT::TYPE_ARRAY,
            'string'     => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($delimiters, $string)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function trimExplode($delimiter, $string, $trim = 'trim', $limit = NULL)
    {
        //return trim_explode($delimiter, $string, $trim, $limit);
        return (array) self::parameters(
        [
            'delimiters' => DT::TYPE_ARRAY,
            'string'     => DT::STRING,
            'trim'       => DT::STRING,
            'limit'      => DT::MIXED
        ])
        ->call(__FUNCTION__)
        ->with($delimiter, $string, $trim, $limit)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function arrayDepth(array $array)
    {
        //return array_depth($array);
        return (int) self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::UINT8);
    }

    protected function fillArrayKeyLeadingZeros(array $array)
    {
        //return fill_array_key_leading_zeros($array);
        return (array) self::parameters(
        [
            'array' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($array)
        ->returning(DT::TYPE_ARRAY);
    }
}
