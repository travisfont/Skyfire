<?php

// takes a date and tells how many days and hours are remaining until the aforementioned date

function countdown($datetime, $sentence_format = FALSE)
{
    $dt_end = new DateTime($datetime);

    if ($remain = $dt_end->diff(new DateTime()))
    {
        if ($sentence_format === TRUE)
        {
            return (string) $remain->d.' days and '.$remain->h.' hours';
        }
        else
        {
            return (array) array
            (
                $remain->h,
                $remain->d
            );
        }
    }
    else
    {
        return FALSE;
    }

}

/* example

echo countdown('December 3, 2016 2:00 PM'); //
 */
