<?php

// Dates interface and function into object inherence

class Dates extends Controller
{
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
        return format_mysql_datetime($date_string);
    }

    // MysqlNow
    protected function mysql_now()
    {
        return mysql_now();
    }

    protected function convert_month($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
    {
        return convert_month($number, $args);
    }
}
