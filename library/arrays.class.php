<?php

// Array interface and function into object inherence

class Arrays extends System
{
    protected function arrayRandom($arr, $amount = 1)
    {
        return arrayRandom($arr, $amount);
    }

    protected function arraySubsort($array, $subkey)
    {
        return arraySubsort($array, $subkey);
    }
}