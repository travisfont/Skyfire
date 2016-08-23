<?php

// Array interface and function into object inherence

class Arrays extends Controller
{
    protected function clearEmptyValues(array $array, $keep_zero = TRUE)
    { return (array) NULL; }

    protected function randomizeArray(array $arr, $amount = 1)
    { return (array) NULL; }

    protected function randomizeArrayElement(array $array)
    { return var_export(NULL); }

    protected function subsortArray(array $array, $subkey)
    { return (array) NULL; }

    protected function convertArrayToObject(array $array)
    { return var_export(NULL); }

    protected function inMultiArray($needle, $haystack, $strict = FALSE)
    { return (bool) NULL; }

    protected function isAssociativeArray($array)
    { return (bool) NULL; }

    protected function trimArrayValues($array)
    { return (array) NULL; }

    protected function transposeData(array $array)
    { return (array) NULL; }

    protected function multiExplode(array $delimiters, $string)
    { return (array) NULL; }

    protected function trimExplode($delimiter, $string, $trim = 'trim', $limit = NULL)
    { return (array) NULL; }

    protected function arrayDepth(array $array)
    { return (int) NULL; }

    protected function fillArrayKeyLeadingZeros(array $array)
    { return (array) NULL; }

    protected function arrayKeysExist(array $needles, array $haystack)
    { return (bool) NULL; }
}
