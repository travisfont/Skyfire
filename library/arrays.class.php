<?php

// Array interface and function into object inherence

class Arrays extends System
{
    protected function randomArray($arr, $amount = 1)
    {
        return randomArray($arr, $amount);
    }

    protected function subsortArray($array, $subkey)
    {
        return subsortArray($array, $subkey);
    }

    protected function convertArrayToObject(array $array)
    {
        return convertArrayToObject($array);
    }

    protected function inMultiArray($needle, $haystack, $strict = FALSE)
    {
        return inMultiArray($needle, $haystack, $strict);
    }

    // isAssociativeArray
    protected function is_associate_array($array)
    {
        return is_associate_array($array);
    }

    protected function randomizeArrayElement($array)
    {
        return randomizeArrayElement($array);
    }

    protected function trimArrayValues($array)
    {
        return trimArrayValues($array);
    }
}