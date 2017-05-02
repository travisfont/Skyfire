<?php

/**
 * returns if a date is in the past, present, or future
 *
 * @param $date_string
 *
 * @return int
 */
function current_date_state($date_string)
{
    if (strtotime($date_string) < time())
    {
        # date is in the past
        return (int) -1;
    }
    if (strtotime($date_string) == time())
    {
        # date is right now
        return (int) 0;
    }
    if (strtotime($date_string) > time())
    {
        # date is in the future
        return (int) 1;
    }
}
