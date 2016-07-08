<?php

function get_utc_timezone()
{
    if ($utc_date_timezone = new DateTimeZone('UTC'))
    {
        return new DateTime("now", $utc_date_timezone);
    }
}