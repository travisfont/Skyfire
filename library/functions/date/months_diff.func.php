<?php

/**
 * Months difference between two dates.
 * Gets the rounded amount of months / floor() based on mathematic 30day calculation
 * @param mixed $date1  (timestamp, or string compatible to strtotime() )
 * @param mixed $date2  Opt.; def:false => now() (timestamp, or string compatible to strtotime() )
 * @return int
 */
 
function months_diff($date1, $date2 = FALSE)
{
    $date1 = is_int($date1)     ? $date1 : strtotime($date1);
    $date2 = ($date2 === FALSE) ? time() : (is_int($date2) ? $date2 : strtotime($date2));

    return floor(abs($date2 - $date1) / (30*60*60*24));;
}
