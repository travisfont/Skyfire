<?php 

// Converts your date string into MySQL Datetime format

function MySQL_Datetime_Format($date_string = FALSE)
{
    if (!$date_string)
    {
        $date_string = time();
    }
    return date("Y-m-d H:i:s", strtotime($date_string));
}