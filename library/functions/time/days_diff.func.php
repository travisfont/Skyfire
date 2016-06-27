<?php

/**
 * Days difference between two dates
 * @param MIXED $date1	(timestamp, or string compatible to strtotime() )
 * @param MIXED $date2	Opt.; def:false => now() (timestamp, or string compatible to strtotime() )
 * @param bool $accuracy_day Use accuracy level based on full days!
 * @return FLOAT
 */
 
function days_diff($date1, $date2 = NULL, $accuracy_day = NULL)
{
    $date1 = is_int($date1)     ? $date1 : strtotime($date1);
    $date2 = ($date2 === NULL)  ? time() : (is_int($date2) ? $date2 : strtotime($date2));

    if (!empty($accuracy_day))
    {
        $date1 = strtotime(date('Y-m-d', $date1));
        $date2 = strtotime(date('Y-m-d', $date2));
    }

    $diff = $date2 - $date1;

    return ($diff - ($diff % 86400)) / 86400;
}
