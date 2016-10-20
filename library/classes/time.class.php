<?php

// Time interface and function into object inherence

class Time extends Controller
{
    const ATOM    = "Y-m-d\TH:i:sP";
    const COOKIE  = "l, d-M-Y H:i:s T";
    const ISO8601 = "Y-m-d\TH:i:sO";
    const RFC822  = "D, d M y H:i:s O";
    const RFC850  = "l, d-M-y H:i:s T";
    const RFC1036 = "D, d M y H:i:s O";
    const RFC1123 = "D, d M Y H:i:s O";
    const RFC2822 = "D, d M Y H:i:s O";
    const RFC3339 = "Y-m-d\TH:i:sP";
    const RSS     = "D, d M Y H:i:s O";
    const W3C     = "Y-m-d\TH:i:sP";


    protected function convert_mins2hm($time, $format = '%02d:%02d')
    {
        //return convert_mins2hm($time, $format);
        return self::parameters(
        [
            'time'   => DT::STRING,
            'format' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($time, $format)
        ->returning([DT::STRING, DT::BOOL]);
    }

    protected function convert_month($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
    {
        //return (string) convert_month($number, $args);
        return (string) self::parameters(
        [
            'number' => DT::STRING,
            'args'   => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($number, $args)
        ->returning(DT::STRING);
    }

    protected function convert_utc_offset_abbr($offset)
    {
        //return (string) convert_utc_offset_abbr($offset);
        return (string) self::parameters(
        [
            'offset' => [DT::STRING, DT::INT8]
        ])
        ->call(__FUNCTION__)
        ->with($offset)
        ->returning(DT::STRING);
    }

    protected function countdown($datetime, $sentence_format = FALSE)
    {
        //return countdown($datetime, $sentence_format);
        return self::parameters(
        [
            'datetime'        => DT::STRING,
            'sentence_format' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($datetime, $sentence_format)
        ->returning([DT::STRING, DT::TYPE_ARRAY, DT::BOOL]);
    }

    protected function current_date_state($date_string)
    {
        //return (int) current_date_state($date_string);
        return (int) self::parameters(
        [
            'date_string' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date_string)
        ->returning(DT::INT8);
    }

    protected function date_yesterday($string)
    {
        //return date_yesterday($string);
        return self::parameters(
        [
            'string' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning([DT::BOOL, DT::STRING]);
    }

    protected function datetime_diff($date1, $date2)
    {
        //return (object) datetime_diff($date1, $date2);
        return (object) self::parameters(
        [
            'date1' => DT::STRING,
            'date2' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date1, $date2)
        ->returning(DT::STD);
    }

    protected function days_diff($date1, $date2 = FALSE, $accuracy_day = FALSE)
    {
        //return (float) days_diff($date1, $date2, $accuracy_day);
        return (float) self::parameters(
        [
            'date1'        => DT::STRING,
            'date2'        => DT::STRING,
            'accuracy_day' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date1, $date2, $accuracy_day)
        ->returning(DT::FLOAT);
    }

    protected function format_date($original_date, $date_format = 'Y-m-d\TH:i:sP')
    {
        //return (string) format_date($original_date, $date_format);
        return (string) self::parameters(
        [
            'original_date' => DT::STRING,
            'date_format'   => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($original_date, $date_format)
        ->returning(DT::STRING);
    }

    protected function format_date_diff($date1, $date2, $return_format = '%H:%I')
    {
        //return (string) format_date_diff($date1, $date2, $return_format);
        return (string) self::parameters(
        [
            'date1'         => DT::STRING,
            'date2'         => DT::STRING,
            'return_format' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date1, $date2, $return_format)
        ->returning(DT::STRING);
    }

    // ideal naming convertion: MySQL_Datetime_Format
    protected function format_mysql_datetime($date_string = FALSE)
    {
        //return format_mysql_datetime($date_string);
        return self::parameters(
        [
            'date_string' => [DT::STRING, DT::BOOL]
        ])
        ->call(__FUNCTION__)
        ->with($date_string)
        ->returning([DT::STRING, DT::BOOL]);
    }

    public static function get_define_timezone($timezone)
    {
        //return get_define_timezone($timezone);
        return self::parameters(
        [
            'timezone' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($timezone)
        ->returning(DT::STD);
    }

    public static function get_server_timezone()
    {
        //return get_server_timezone();
        return self::parameters()->call(__FUNCTION__)
                                 ->returning(DT::STD);
    }

    public static function get_utc_timezone()
    {
        //return get_utc_timezone();
        return self::parameters()->call(__FUNCTION__)
                                 ->returning(DT::STD);
    }

    protected function get_week_number($ddate)
    {
        //return get_week_number($ddate);
        return self::parameters(
        [
            'date' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($ddate)
        ->returning([DT::STRING, DT::BOOL]);
    }

    protected function is_adult($day, $month, $year)
    {
        //return (bool) is_adult($day, $month, $year);
        return (bool) self::parameters(
        [
            'day'   => DT::UINT8,
            'month' => DT::UINT8,
            'year'  => DT::UINT8
        ])
        ->call(__FUNCTION__)
        ->with($day, $month, $year)
        ->returning(DT::BOOL);
    }

    protected function months_diff($date1, $date2 = FALSE)
    {
        //return (int) months_diff($date1, $date2);
        return (string) self::parameters(
        [
            'date1' => DT::STRING,
            'date2' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date1, $date2)
        ->returning(DT::UINT32);
    }

    protected function mysql_now()
    {
        //return (string) mysql_now();
        return (string) self::parameters()->call(__FUNCTION__)
                                          ->returning(DT::STRING);
    }

    protected function next_week($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
    {
        // return (string) next_week($date, $format, $weeks);
        return (string) self::parameters(
        [
            'date'   => DT::STRING,
            'format' => DT::STRING,
            'weeks'  => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date, $format, $weeks)
        ->returning(DT::STRING);
    }

    public static function server_timezone_offset($user_timezone = 'UTC')
    {
        //return (int) server_timezone_offset($user_timezone);
        return (int) self::parameters(
            [
                'user_timezone' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($user_timezone)
            ->returning(DT::UINT8);
    }

    protected function show_time_left($dbdate, $short = TRUE)
    {
        //return (string) show_time_left($dbdate, $short);
        return (string) self::parameters(
        [
            'dbdate' => DT::STRING,
            'short'  => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($dbdate, $short)
        ->returning(DT::STRING);
    }

    // timeAge
    protected function time_ago($date)
    {
        //return time_ago($date);
        return (string) self::parameters(
        [
            'date' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($date)
        ->returning(DT::STRING);
    }
}

/*
$userDateTime   = Time::getDefineTimeZone('America/Curacao');
$serverDateTime = Time::getServerTimeZone();
$timeOffset     = Time::gserverTimeZone_offset('America/Curacao');

var_dump($userDateTime);
var_dump($serverDateTime);
var_dump($timeOffset);

$userDateTime->add(new DateInterval('PT'.$timeOffset.'S'));

var_dump($userDateTime);