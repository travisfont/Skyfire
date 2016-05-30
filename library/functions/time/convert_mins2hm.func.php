<?php

// Convert Minutes to Hours & Minutes

function convert_mins2hm($time, $format = '%02d:%02d')
{
    if ($time < 1)
    {
        return FALSE;
    }

    $hours   = floor($time / 60);
    $minutes = ($time % 60);

    return (string) sprintf($format, $hours, $minutes);
}

/* Example:
echo convert_mins2hm(135); // returns 02:15
