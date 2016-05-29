<?php

//  returns the week number by date

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
