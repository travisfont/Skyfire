<?php

/**
 * Converts your date string into MySQL Datetime format
 *
 * @param bool $date_string
 *
 * @return false|string
 */
function format_mysql_datetime($date_string = FALSE)
{
    if (!$date_string)
    {
        $date_string = time();
    }

    return date('Y-m-d H:i:s', strtotime($date_string));
}
