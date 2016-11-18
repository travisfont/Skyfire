<?php

// Math interface and function into object inherence

class Math extends Controller
{
    protected function calculateAge($date, $format = 'm/d/Y')
    { return (float) NULL; }

    protected function calculateDistance($lat1, $lng1, $lat2, $lng2, $miles = FALSE)
    { return (float) NULL; }

    protected function convertCurrency($amount, $from, $to)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    protected function formatCurrency($floatcurr, $curr = 'USD')
    { return (string) NULL; }

    protected function getPercentageOf($percentage, $number)
    { return (float) NULL; }

    protected function intMax($datatype)
    { return (NULL) ? (int) NULL : (bool) NULL; }

    protected function intMin($datatype)
    { return (NULL) ? (int) NULL : (bool) NULL; }

    protected function isEven($number)
    { return (float) NULL; }

    protected function isOdd($number)
    { return (float) NULL; }

    protected function leadingZero($num, $places = 0)
    { return (string) NULL; }

    protected function luhn($number)
    { return (bool) NULL; }

    protected function randomNumber($digits, $leading_zeros = FALSE)
    { return (NULL) ? (int) NULL : (string) NULL; }

    protected function randomizeCrypto($min, $max)
    { return (int) NULL; }

    protected function roundDollar($amount)
    { return (float) NULL; }

    protected function roundMins($hour, $minutes = 1, $format = 'H:i')
    { return (NULL) ? (bool) NULL : (string) NULL; }

    protected function savedPercentage($original_price, $current_price)
    { return (string) NULL; }

    // valid_creditcard
    // generate_creditcard_test_number
    // get_percentage
    // is_creditcard
}
