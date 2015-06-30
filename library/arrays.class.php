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
}