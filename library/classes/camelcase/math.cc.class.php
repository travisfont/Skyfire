<?php

/**
 * Class Math - Skyfire PHP
 *
 * Math interface and function into object inherence
 */
class Math extends Controller
{
    /**
     * @param $date
     * @param string $format
     *
     * @return float
     */
    protected function calculateAge($date, $format = 'm/d/Y')
    { return (float) NULL; }

    /**
     * @param $lat1
     * @param $lng1
     * @param $lat2
     * @param $lng2
     * @param bool $miles
     *
     * @return float
     */
    protected function calculateDistance($lat1, $lng1, $lat2, $lng2, $miles = FALSE)
    { return (float) NULL; }

    /**
     * @param   int     $amount amount to convert (either float or int)
     * @param   string  $from   original currency (e.g. USD)
     * @param   string  $to     return currency after conversion (e.e.g EUR)
     *
     * @return  string|bool
     */
    protected function convertCurrency($amount, $from, $to)
    { return (NULL) ? (string) NULL : (bool) NULL; }

    /**
     * @param flatcurr  float   integer to convert
     * @param curr  string of desired currency format
     *
     * @return formatted number
     */
    protected function formatCurrency($floatcurr, $curr = 'USD')
    { return (string) NULL; }

    /**
     * @param $percentage
     * @param $number
     *
     * @return float
     */
    protected function getPercentageOf($percentage, $number)
    { return (float) NULL; }

    /**
     * @param $datatype
     *
     * @return bool|int
     */
    protected function intMax($datatype)
    { return (NULL) ? (int) NULL : (bool) NULL; }

    /**
     * @param $datatype
     *
     * @return bool|int
     */
    protected function intMin($datatype)
    { return (NULL) ? (int) NULL : (bool) NULL; }

    /**
     * @param $number
     *
     * @return bool
     */
    protected function isEven($number)
    { return (bool) NULL; }

    /**
     * @param $number
     *
     * @return bool
     */
    protected function isOdd($number)
    { return (bool) NULL; }

    /**
     * @param $num
     * @param int $places
     *
     * @return string
     */
    protected function leadingZero($num, $places = 0)
    { return (string) NULL; }

    /**
     * @param $number
     *
     * @return bool
     */
    protected function luhn($number)
    { return (bool) NULL; }

    /**
     * @param $digits
     * @param bool $leading_zeros
     *
     * @return int|string
     */
    protected function randomNumber($digits, $leading_zeros = FALSE)
    { return (NULL) ? (int) NULL : (string) NULL; }

    /**
     * @param $min
     * @param $max
     *
     * @return int
     */
    protected function randomizeCrypto($min, $max)
    { return (int) NULL; }

    /**
     * @param $amount
     *
     * @return float
     */
    protected function roundDollar($amount)
    { return (float) NULL; }

    /**
     * @param $hour
     * @param int $minutes
     * @param string $format
     *
     * @return bool|string
     */
    protected function roundMins($hour, $minutes = 1, $format = 'H:i')
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $original_price
     * @param $current_price
     *
     * @return string
     */
    protected function savedPercentage($original_price, $current_price)
    { return (string) NULL; }
}
