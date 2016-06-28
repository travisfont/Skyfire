<?php

// Math interface and function into object inherence

class Math extends Controller
{
    protected function luhn($number)
    {
        return luhn($number);
    }

    // randomizeCrypto
    protected function randomize_crypto($min, $max)
    {
        return randomize_crypto($min, $max);
    }

    // calculateAge
    protected function calculate_age($date, $format = 'm/d/Y')
    {
        return calculate_age($date, $format);
    }

    // calculateDistance
    protected function calculate_distance($lat1, $lng1, $lat2, $lng2, $miles = TRUE)
    {
        return calculate_distance($lat1, $lng1, $lat2, $lng2, $miles);
    }

    // roundDollar
    protected function round_dollar($amount)
    {
        return round_dollar($amount);
    }

    // formatCurrency
    protected function format_currency($floatcurr, $curr = 'USD')
    {
        return format_currency($floatcurr, $curr);
    }

    // rondomNumber
    protected function random_number($digits, $leading_zeros = FALSE)
    {
        return random_number($digits, $leading_zeros);
    }

    // getPercentageOf
    protected function get_percentage_of($percentage, $number)
    {
        return get_percentage_of($percentage, $number);
    }

    // leadingZero
    protected function leading_zero($num, $places = 0)
    {
        return leading_zero($num, $places);
    }

    // roundMins
    protected function round_mins($hour, $minutes = '1', $format = "H:i")
    {
        return round_mins($hour, $minutes, $format);
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
        return self::parameters(
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
        return self::parameters(
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
