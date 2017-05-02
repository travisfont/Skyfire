<?php

/**
 * This will validate is the given date is over 18 years (an adult)
 *
 * @return boolean
 **/
function is_adult($day, $month, $year)
{
    if ($month <= 0 || $day <= 0 || $year <= 0)
    {
        return FALSE;
    }

    $eightteen_in_seconds = 567648000;
    $now                  = mktime(0 ,0 ,0, date('n'), date('j'), date('Y'));
    $test_time            = mktime(0, 0, 0, $month, $day, $year);

    if (($now - $test_time) > $eightteen_in_seconds)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
