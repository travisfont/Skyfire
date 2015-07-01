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

    protected function calculateAge($date, $format = 'm/d/Y')
    {
        return calculateAge($date, $format);
    }

    protected function calculateDistance($lat1, $lng1, $lat2, $lng2, $miles = TRUE)
    {
        return calculateDistance($lat1, $lng1, $lat2, $lng2, $miles);
    }

    protected function roundDollar($amount)
    {
        return roundDollar($amount);
    }
}