<?php

// Note:
// DateTime::ATOM

/**
 * @param $date
 * @param string $format
 * @param int $weeks
 *
 * @return string
 */
function next_week($date, $format = 'Y-m-d\TH:i:sP', $weeks = 1)
{
           $date = new DateTime($date);
           $date->modify('+'.$weeks.' week');

    return (string) $date->format($format);
}
