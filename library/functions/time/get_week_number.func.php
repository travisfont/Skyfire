<?php

/**
 * returns the week number by date
 *
 * @param $ddate
 *
 * @return bool|string
 */
function get_week_number($ddate)
{
    if ($date = new DateTime($ddate))
    {
        return (string) $date->format('W');
    }
    else
    {
        return FALSE;
    }
}
