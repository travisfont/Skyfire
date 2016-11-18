<?php

// Math interface and function into object inherence

class Math extends Controller
{
    protected function absint($number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'number' => DT::NUMBER
            ])
            ->call(__FUNCTION__)
            ->with($number)
            ->returning(DT::UINT64);
        }
        else
        {
            return (int) absint($number);
        }
    }

    protected function calculate_age($date, $format = 'm/d/Y')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (float) self::parameters(
            [
                'date'   => DT::STRING,
                'format' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($date, $format)
            ->returning(DT::FLOAT);
        }
        else
        {
            return (float) calculate_age($date, $format);
        }
    }

    protected function calculate_distance($lat1, $lng1, $lat2, $lng2, $miles = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (float) self::parameters(
            [
                'lat1'  => DT::FLOAT,
                'lng1'  => DT::FLOAT,
                'lat2'  => DT::FLOAT,
                'lng2'  => DT::FLOAT,
                'miles' => DT::BOOL,
            ])
            ->call(__FUNCTION__)
            ->with($lat1, $lng1, $lat2, $lng2, $miles)
            ->returning(DT::FLOAT);
        }
        else
        {
            return (float) calculate_distance($lat1, $lng1, $lat2, $lng2, $miles);
        }
    }

    protected function convert_currency($amount, $from, $to)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'amount' => [DT::INT64,DT::FLOAT],
                'from'   =>  DT::STRING,
                'to'     =>  DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($amount, $from, $to)
            ->returning([DT::STRING, DT::BOOL]);
        }
        else
        {
            return convert_currency($amount, $from, $to);
        }
    }

    protected function format_currency($floatcurr, $curr = 'USD')
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'floatcurr' => [DT::INT64, DT::UINT64, DT::FLOAT],
                'curr'      =>  DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($floatcurr, $curr)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) format_currency($floatcurr, $curr);
        }
    }

    protected function get_percentage_of($percentage, $number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (float) self::parameters(
            [
                'num'    => DT::UINT64,
                'places' => DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($percentage, $number)
            ->returning(DT::FLOAT);
        }
        else
        {
            return (float) get_percentage_of($percentage, $number);
        }
    }

    protected function int_max($datatype)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'datatype' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($datatype)
            ->returning([DT::UINT64, DT::BOOL]);
        }
        else
        {
            return int_max($datatype);
        }
    }

    protected function int_min($datatype)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'datatype' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($datatype)
            ->returning([DT::INT64, DT::BOOL]);
        }
        else
        {
            return int_min($datatype);
        }
    }

    protected function is_even($number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'number' => DT::NUMBER
            ])
            ->call(__FUNCTION__)
            ->with($number)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_even($number);
        }
    }

    protected function is_odd($number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'number' => DT::NUMBER
            ])
            ->call(__FUNCTION__)
            ->with($number)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_odd($number);
        }
    }

    protected function leading_zero($num, $places = 0)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'num'    => [DT::INT64, DT::UINT64],
                'places' =>  DT::UINT8
            ])
            ->call(__FUNCTION__)
            ->with($num, $places)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) leading_zero($num, $places);
        }
    }

    protected function luhn($number)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'number' => [DT::INT64, DT::UINT64]
            ])
            ->call(__FUNCTION__)
            ->with($number)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) luhn($number);
        }
    }

    protected function random_number($digits, $leading_zeros = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'digits'        => DT::UINT64,
                'leading_zeros' => DT::BOOL
            ])
            ->call(__FUNCTION__)
            ->with($digits, $leading_zeros)
            ->returning([DT::UINT64, DT::STRING]);
        }
        else
        {
            return random_number($digits, $leading_zeros);
        }
    }

    protected function randomize_crypto($min, $max)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (int) self::parameters(
            [
                'min' => DT::UINT64,
                'max' => DT::UINT64
            ])
            ->call(__FUNCTION__)
            ->with($min, $max)
            ->returning(DT::UINT64);
        }
        else
        {
            return (int) randomize_crypto($min, $max);
        }
    }

    protected function round_dollar($amount)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (float) self::parameters(
            [
                'amount' => [DT::INT64, DT::UINT64, DT::FLOAT]
            ])
            ->call(__FUNCTION__)
            ->with($amount)
            ->returning(DT::FLOAT);
        }
        else
        {
            return (float) round_dollar($amount);
        }
    }

    protected function round_mins($hour, $minutes = 1, $format = "H:i")
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'hour'    => DT::STRING,
                'minutes' => DT::UINT8,
                'format'  => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($hour, $minutes, $format)
            ->returning([DT::BOOL, DT::STRING]);
        }
        else
        {
            return round_mins($hour, $minutes, $format);
        }
    }

    protected function saved_percentage($original_price, $current_price)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'original_price' => [DT::INT64, DT::FLOAT],
                'current_price'  => [DT::INT64, DT::FLOAT]
            ])
            ->call(__FUNCTION__)
            ->with($original_price, $current_price)
            ->returning(DT::STRING);
        }
        else
        {
            return (string) saved_percentage($original_price, $current_price);
        }
    }
}
