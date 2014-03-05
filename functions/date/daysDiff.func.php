<?php

/**
 * Days difference between two dates
 * @param MIXED $date1	(timestamp, or string compatible to strtotime() )
 * @param MIXED $date2	Opt.; def:false => now() (timestamp, or string compatible to strtotime() )
 * @param bool $accuracyDay Use accuracy level based on full days!
 * @return FLOAT
 */
static public function daysDiff( $date1, $date2=false, $accuracyDay=false )
{
    $date1 = is_int($date1) ? $date1 : strtotime($date1);
    $date2 = ($date2==false) ? time() : (is_int($date2) ? $date2 : strtotime($date2));

    if( $accuracyDay ) {
        $date1 = strtotime(date('Y-m-d', $date1));
        $date2 = strtotime(date('Y-m-d', $date2));
    }

    $diff = $date2 - $date1;
    $days = ($diff - ($diff % 86400)) / 86400;

    return $days;
}