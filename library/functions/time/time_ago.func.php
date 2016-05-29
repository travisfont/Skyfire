<?php

// get the a datetime in the "X time ago" format

function time_ago($date)
{
    if (empty($date))
    {
        throw new Exception('time_ago(?): No date provided.');
    }

    $periods   = array('second', 'minute', 'hour', 'day', 'week', 'month', 'year', 'decade');
    $lengths   = array('60','60','24','7','4.35','12','10');
    $now       = time();
    $unix_date = strtotime($date);

    // check validity of date
    if (empty($unix_date))
    {
        throw new Exception('time_ago(?): Bad date format.');
    }

    // is it future date or past date
    if ($now > $unix_date)
    {
        $difference = $now - $unix_date;
        $tense      = 'ago';
    }
    else
    {
        $difference = $unix_date - $now;
        $tense      = 'from now';
    }

    for ($j = 0; $difference >= $lengths[$j] && $j < (count($lengths) - 1); $j++)
    {
        $difference /= $lengths[$j];
    }

    $difference = round($difference);

    if ($difference != 1)
    {
        $periods[$j] .= 's';
    }

    return $difference.' '.$periods[$j].' '.$tense;
}

/*
// Example:
$date = '2009-03-04 17:45';
$result = time_ago($date); // 2 days ago
*/
