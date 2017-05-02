<?php

/**
 * default of $date_format is ATOM (RFC3339)
 *
 * @param $original_date
 * @param string $date_format
 *
 * @return string
 */
function format_date($original_date, $date_format = 'Y-m-d\TH:i:sP')
{
    return (string) date($date_format, strtotime($original_date));
}
