<?php

// Array interface and function into object inherence

class Arrays extends Controller
{
    // randomizeArray
    protected function randomize_array($arr, $amount = 1)
    {
        return randomize_array($arr, $amount);
    }

    // randomizeArrayElement
    protected function randomize_array_element($array)
    {
        return randomize_array_element($array);
    }

    // subsortArray
    protected function subsort_array($array, $subkey)
    {
        return subsort_array($array, $subkey);
    }

    // convertArrayToObject
    protected function convert_array_to_object(array $array)
    {
        return convert_array_to_object($array);
    }

    // inMultiArray
    protected function in_multi_array($needle, $haystack, $strict = FALSE)
    {
        return in_multi_array($needle, $haystack, $strict);
    }

    // isAssociativeArray
    protected function is_associate_array($array)
    {
        return is_associate_array($array);
    }

    // trimArrayValues
    protected function trim_array_values($array)
    {
        return trim_array_values($array);
    }

    // transposeData
    protected function transpose_data(array $array)
    {
        return transpose_data($array);
    }
}