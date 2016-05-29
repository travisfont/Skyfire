<?php

// default of $date_format is ATOM (RFC3339)

function format_date($original_date, $date_format = 'Y-m-d\TH:i:sP')
{
    return (string) date($date_format, strtotime($original_date));
}
