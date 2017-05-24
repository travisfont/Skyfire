<?php

/**
 * Class Time  - Skyfire PHP
 *
 * Time interface and function into object inherence
 */
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

    /**
     * @param $time
     * @param string $format
     *
     * @return bool|string
     */
    protected function convertMinsToHm($time, $format = '%02d:%02d')
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $number
     * @param array $args
     *
     * @return string
     */
    protected function convertMonth($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
    { return (string) NULL; }

    /**
     * @param $offset
     *
     * @return string
     */
    protected function convertUtcOffsetAbbr($offset)
    { return (string) NULL; }

    /**
     * @param $date_string
     *
     * @return int
     */
    protected function currentDateState($date_string)
    { return (int) NULL; }

    /**
     * @param $string
     *
     * @return bool|string
     */
    protected function dateYesterday($string)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $date1
     * @param $date2
     *
     * @return object
     */
    protected function datetimeDiff($date1, $date2)
    { return (object) NULL; }

    /**
     * @param $date1
     * @param bool $date2
     * @param bool $accuracy_day
     *
     * @return float
     */
    protected function daysDiff($date1, $date2 = FALSE, $accuracy_day = FALSE)
    { return (float) NULL; }

    /**
     * @param $original_date
     * @param string $date_format
     *
     * @return string
     */
    protected function formatDate($original_date, $date_format = 'Y-m-d\TH:i:sP')
    { return (string) NULL; }

    /**
     * @param $date1
     * @param $date2
     * @param string $return_format
     *
     * @return string
     */
    protected function formatDateDiff($date1, $date2, $return_format = '%H:%I')
    { return (string) NULL; }

    // ideal naming convertion: MySQL_Datetime_Format

    /**
     * @param bool $date_string
     *
     * @return bool|string
     */
    protected function formatMysqlDatetime($date_string = FALSE)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $timezone
     *
     * @return object
     */
    public static function getDefineTimezone($timezone)
    { return (object) NULL; }

    /**
     * @return object
     */
    public static function getServerTimezone()
    { return (object) NULL; }

    /**
     * @return object
     */
    public static function getUtcTimeZone()
    { return (object) NULL; }

    /**
     * @param $ddate
     *
     * @return bool|string
     */
    protected function getWeekNumber($ddate)
    { return (NULL) ? (bool) NULL : (string) NULL; }

    /**
     * @param $day
     * @param $month
     * @param $year
     *
     * @return bool
     */
    protected function isAdult($day, $month, $year)
    { return (bool) NULL; }

    /**
     * @param $date1
     * @param bool $date2
     *
     * @return int
     */
    protected function monthsDiff($date1, $date2 = FALSE)
    { return (int) NULL; }

    /**
     * @return string
     */
    protected function mysqlNow()
    { return (string) NULL; }

    /**
     * @param $date
     * @param int $weeks
     * @param string $format
     *
     * @return string
     */
    protected function nextWeek($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
    { return (string) NULL; }

    /**
     * @param string $user_timezone
     *
     * @return int
     */
    public static function serverTimezoneOffset($user_timezone = 'UTC')
    { return (int) NULL; }

    /**
     * @param $dbdate
     * @param bool $short
     *
     * @return string
     */
    protected function showTimeLeft($dbdate, $short = TRUE)
    { return (string) NULL; }

    /**
     * @param $date
     *
     * @return string
     */
    protected function timeAge($date)
    { return (string) NULL; }
}
