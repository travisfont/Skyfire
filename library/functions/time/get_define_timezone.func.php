<?php

/**
 * @param $timezone
 *
 * @return DateTime
 */
function get_define_timezone($timezone)
{
    if ($user_datetimezone = new DateTimeZone($timezone))
    {
        return new DateTime("now", $user_datetimezone);
    }
}
