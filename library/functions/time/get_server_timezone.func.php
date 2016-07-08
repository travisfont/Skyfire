<?php

function get_server_timezone()
{
    $server_timezone     = date_default_timezone_get();
    $server_datetimezone = new DateTimeZone($server_timezone);

    return new DateTime("now", $server_datetimezone);
}
