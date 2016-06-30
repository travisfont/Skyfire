<?php

// Math interface and function into object inherence

class Math extends Controller
{
    protected function luhn($number)
    {
        //return (bool) luhn($number);
        return (bool) self::parameters(
        [
            'number' => [DT::INT64, DT::UINT64]
        ])
        ->call(__FUNCTION__)
        ->with($number)
        ->returning(DT::BOOL);
    }

    // randomizeCrypto
    protected function randomize_crypto($min, $max)
    {
        //return (int) randomize_crypto($min, $max);
        return (int) self::parameters(
        [
            'min' => DT::UINT64,
            'max' => DT::UINT64
        ])
        ->call(__FUNCTION__)
        ->with($min, $max)
        ->returning(DT::UINT64);
    }

    // calculateAge
    protected function calculate_age($date, $format = 'm/d/Y')
    {
        //return (float) calculate_age($date, $format);
        return (float) self::parameters(
        [
            'date'   => DT::STRING,
            'format' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date, $format)
        ->returning(DT::FLOAT);
    }

    // calculateDistance
    protected function calculate_distance($lat1, $lng1, $lat2, $lng2, $miles = FALSE)
    {
        //return (float) calculate_distance($lat1, $lng1, $lat2, $lng2, $miles);
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

    // roundDollar
    protected function round_dollar($amount)
    {
        //return (float) round_dollar($amount);
        return (float) self::parameters(
        [
            'amount' => [DT::INT64, DT::UINT64, DT::FLOAT]
        ])
        ->call(__FUNCTION__)
        ->with($amount)
        ->returning(DT::FLOAT);
    }

    // formatCurrency
    protected function format_currency($floatcurr, $curr = 'USD')
    {
        //return (string) format_currency($floatcurr, $curr);
        return (string) self::parameters(
        [
            'floatcurr' => [DT::INT64, DT::UINT64, DT::FLOAT],
            'curr'      =>  DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($floatcurr, $curr)
        ->returning(DT::STRING);
    }

    // rondomNumber
    protected function random_number($digits, $leading_zeros = FALSE)
    {
        //return random_number($digits, $leading_zeros);
        return self::parameters(
        [
            'digits'        => DT::UINT64,
            'leading_zeros' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($digits, $leading_zeros)
        ->returning([DT::UINT64, DT::STRING]);
    }

    // getPercentageOf
    protected function get_percentage_of($percentage, $number)
    {
        //return (float) get_percentage_of($percentage, $number);
        return (float) self::parameters(
        [
            'num'    => DT::UINT64,
            'places' => DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($percentage, $number)
        ->returning(DT::FLOAT);
    }

    // leadingZero
    protected function leading_zero($num, $places = 0)
    {
        //return (string) leading_zero($num, $places);
        return (string) self::parameters(
        [
            'num'    => [DT::INT64, DT::UINT64],
            'places' =>  DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($num, $places)
        ->returning(DT::STRING);
    }

    // roundMins
    protected function round_mins($hour, $minutes = 1, $format = "H:i")
    {
        //return round_mins($hour, $minutes, $format);
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

    // savedPercentage
    protected function saved_percentage($original_price, $current_price)
    {
        //return saved_percentage($original_price, $current_price);
        return (string) self::parameters(
        [
            'original_price' => [DT::INT64, DT::FLOAT],
            'current_price'  => [DT::INT64, DT::FLOAT]
        ])
        ->call(__FUNCTION__)
        ->with($original_price, $current_price)
        ->returning(DT::STRING);
    }

    protected function absint($number)
    {
        //return absint($number);
        return self::parameters(
        [
            'number' => DT::NUMBER
        ])
        ->call(__FUNCTION__)
        ->with($number)
        ->returning(DT::UINT64);
}

    protected function is_even($number)
    {
        // return is_even($number);
        return (bool) self::parameters(
        [
            'number' => DT::NUMBER
        ])
        ->call(__FUNCTION__)
        ->with($number)
        ->returning(DT::BOOL);
    }

    protected function is_odd($number)
    {
        //return is_odd($number);
        return (bool) self::parameters(
        [
            'number' => DT::NUMBER
        ])
        ->call(__FUNCTION__)
        ->with($number)
        ->returning(DT::BOOL);
    }

    protected function int_min($datatype)
    {
        //return int_min($datatype);
        return self::parameters(
        [
            'datatype' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($datatype)
        ->returning([DT::INT64, DT::BOOL]);
    }

    protected function int_max($datatype)
    {
        //return int_max($datatype);
        return self::parameters(
        [
            'datatype' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($datatype)
        ->returning([DT::UINT64, DT::BOOL]);
}

    protected function convert_currency($amount, $from, $to)
    {
        //return convert_currency($amount, $from, $to);
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
}
