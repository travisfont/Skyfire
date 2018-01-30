<?php

/**
 * Class ArrayList - Skyfire PHP
 *
 * Array interface and function into object inherence
 */
class ArrayList extends Controller
{
    /**
     * @param array $array
     *
     * @return int
     */
    protected function arrayDepth(array $array)
    { return (int) NULL; }

    /**
     * @param array $needles
     * @param array $haystack
     *
     * @return bool
     */
    protected function arrayKeysExist(array $needles, array $haystack)
    { return (bool) NULL; }

    /**
     * @param array $array
     * @param bool $keep_zero
     *
     * @return array
     */
    protected function clearEmptyValues(array $array, $keep_zero = TRUE)
    { return (array) NULL; }

    /**
     * @param array $array
     *
     * @return object
     */
    protected function convertArrayToObject(array $array)
    { return (object) NULL; }

    /**
     * @param array $array
     *
     * @return array
     */
    protected function fillArrayKeyLeadingZeros(array $array)
    { return (array) NULL; }

    /**
     * @param $glue
     * @param $array
     *
     * @return string
     */
    protected function implodeAll($glue, $array)
    { return (string) NULL; }

    /**
     * @param $needle
     * @param $haystack
     * @param bool $strict
     *
     * @return bool
     */
    protected function inMultiArray($needle, $haystack, $strict = FALSE)
    { return (bool) NULL; }

    /**
     * @param $array
     *
     * @return bool
     */
    protected function isAssociativeArray($array)
    { return (bool) NULL; }

    /**
     * @param array $array
     *
     * @return null
     */
    protected function multiAsort(array &$array)
    { return NULL; }

    /**
     * @param array $delimiters
     * @param $string
     *
     * @return array
     */
    protected function multiExplode(array $delimiters, $string)
    { return (array) NULL; }

    /**
     * @param $pattern
     * @param array $array
     *
     * @return int
     */
    function pregArrayKeyExists($pattern, array $array)
    { return (int) NULL; }

    /**
     * @param array $arr
     * @param int $amount
     *
     * @return array
     */
    protected function randomizeArray(array $arr, $amount = 1)
    { return (array) NULL; }

    /**
     * @param array $array
     *
     * @return array|string
     */
    protected function randomizeArrayElement(array $array)
    { return (NULL) ? (string) NULL : (array) NULL; }

    /**
     * @param array $array
     * @param $subkey
     *
     * @return array
     */
    protected function subsortArray(array $array, $subkey)
    { return (array) NULL; }

    /**
     * @param array $array
     *
     * @return array
     */
    protected function transposeData(array $array)
    { return (array) NULL; }

    /**
     * @param $array
     *
     * @return array
     */
    protected function trimArrayValues($array)
    { return (array) NULL; }

    /**
     * @param $delimiter
     * @param $string
     * @param string $trim
     * @param null $limit
     *
     * @return array
     */
    protected function trimExplode($delimiter, $string, $trim = 'trim', $limit = NULL)
    { return (array) NULL; }
}
