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

    protected function date_yesterday($str)
    {
        return date_yesterday($str);
    }

    protected function datetime_diff($date1, $date2)
    {
        return datetime_diff($date1, $date2);
    }

    protected function days_diff($date1, $date2 = FALSE, $accuracy_day = FALSE)
    {
        return days_diff($date1, $date2, $accuracy_day);
    }

    protected function months_diff($date1, $date2 = FALSE)
    {
        return months_diff($date1, $date2);
    }

    protected function show_time_left($dbdate)
    {
        return show_time_left($dbdate);
    }

    // timeAge
    protected function time_ago($date)
    {
        return time_ago($date);
    }

    // ConvertUtcOffsetAbbr()
    protected function convert_utc_offset_abbr($offset)
    {
        return convert_utc_offset_abbr($offset);
    }

    //nextWeek
    protected function next_week($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
    {
        return next_week($date, $weeks, $format);
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

    // MysqlNow
    protected function mysql_now()
    {
        //return (string) mysql_now();
        return (string)  self::parameters()
            ->call(__FUNCTION__)
            ->returning(DT::STRING);
    }

    protected function convert_month($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
    {
        //return (string) convert_month($number, $args);
        return (string) self::parameters(
        [
            'number' => DT::STRING,
            'args'   => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($number, $args)
        ->returning(DT::STRING);
    }

    public static function getUTCTimeZone()
    {
        $UTCDateTimeZone = new DateTimeZone('UTC');
        return new DateTime("now", $UTCDateTimeZone);
    }

    public static function serverTimeZone_offset($userTimeZone = 'UTC')
    {
        $userDateTimeZone = new DateTimeZone($userTimeZone);
        $userDateTime     = new DateTime("now", $userDateTimeZone);

        $serverTimeZone     = date_default_timezone_get();
        $serverDateTimeZone = new DateTimeZone($serverTimeZone);
        $serverDateTime     = new DateTime("now", $serverDateTimeZone);

        return $serverDateTimeZone->getOffset($userDateTime) - $userDateTimeZone->getOffset($userDateTime);
    }

    public static function getDefineTimeZone($timezone)
    {
        $userDateTimeZone = new DateTimeZone($timezone);
        return new DateTime("now", $userDateTimeZone);
    }

    public static function getServerTimeZone()
    {
        $serverTimeZone     = date_default_timezone_get();
        $serverDateTimeZone = new DateTimeZone($serverTimeZone);

        return new DateTime("now", $serverDateTimeZone);
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

    // convertMinsToHm
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

    // formatDateDiff
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

    protected function countdown($datetime, $sentence_format = FALSE)
    {
        //return countdown($datetime, $sentence_format);
        return self::parameters(
        [
            'datetime'         > DT::STRING,
            'sentence_format' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($datetime, $sentence_format)
        ->returning([DT::STRING, DT::TYPE_ARRAY, DT::BOOL]);
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