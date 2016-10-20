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

    protected function convertMinsToHm($time, $format = '%02d:%02d')
    { return (NULL) ? (bool) NULL : (string) NULL; }

    protected function convertMonth($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
    { return (string) NULL; }

    protected function convertUtcOffsetAbbr($offset)
    { return (string) NULL; }

    protected function currentDateState($date_string)
    { return (int) NULL; }

    protected function dateYesterday($string)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    protected function datetimeDiff($date1, $date2)
    { return (object) NULL; }

    protected function daysDiff($date1, $date2 = FALSE, $accuracy_day = FALSE)
    { return (float) NULL; }

    protected function formatDate($original_date, $date_format = 'Y-m-d\TH:i:sP')
    { return (string) NULL; }

    protected function formatDateDiff($date1, $date2, $return_format = '%H:%I')
    { return (string) NULL; }

    // ideal naming convertion: MySQL_Datetime_Format
    protected function formatMysqlDatetime($date_string = FALSE)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    public static function getDefineTimezone($timezone)
    { return (object) NULL; }

    public static function getServerTimezone()
    { return (object) NULL; }

    public static function getUtcTimeZone()
    { return (object) NULL; }

    protected function getWeekNumber($ddate)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    protected function isAdult($day, $month, $year)
    { return (bool) NULL; }

    protected function monthsDiff($date1, $date2 = FALSE)
    { return (int) NULL; }

    protected function mysqlNow()
    { return (string) NULL; }

    protected function nextWeek($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
    { return (string) NULL; }

    public static function serverTimezoneOffset($user_timezone = 'UTC')
    { return (int) NULL; }

    protected function showTimeLeft($dbdate, $short = TRUE)
    { return (string) NULL; }

    protected function timeAge($date)
    { return (string) NULL; }
}
