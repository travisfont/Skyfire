<?php

// similar to datetime_diff, however, this function does not require DateTime instances as parameters
// Also function had additional option parameter to return customized time string

function format_date_diff($date1, $date2, $return_format = '%H:%I')
{
    $datetime1 = new DateTime($date1);
    $datetime2 = new DateTime($date2);
    $interval = $datetime1->diff($datetime2);

    return (string) $interval->format($return_format);
}
