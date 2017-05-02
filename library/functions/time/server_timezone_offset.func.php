<?php

/**
 * @param string $user_timezone
 *
 * @return int
 */
function server_timezone_offset($user_timezone = 'UTC')
{
    $user_datetimezone = new DateTimeZone($user_timezone);
    $user_datetime     = new DateTime("now", $user_datetimezone);

    $server_timezone     = date_default_timezone_get();
    $server_datetimezone = new DateTimeZone($server_timezone);
    $server_datetime     = new DateTime("now", $server_datetimezone);

    return (int) ($server_datetimezone->getOffset($server_datetime) - $user_datetimezone->getOffset($user_datetime));
}