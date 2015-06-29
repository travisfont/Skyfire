<?php

// Math interface and function into object inherence

class Math extends System
{
    protected function luhn($number)
    {
        return luhn($number);
    }

    protected function randomizeCrypto($min, $max)
    {
        return randomizeCrypto($min, $max);
    }
}