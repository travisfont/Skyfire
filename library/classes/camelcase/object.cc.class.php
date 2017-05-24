<?php

/*
 * Class Objects - Skyfire PHP
 *
 * Array interface and function into object inherence
 */
class Object extends Controller
{
    /**
     * @param $obj
     * @param $arr
     *
     * @return array
     */
    protected function convertObjectsToArrays($obj, &$arr)
    { return (array) NULL; }
}
