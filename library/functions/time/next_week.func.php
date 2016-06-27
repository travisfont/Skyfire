<?php

// Note:
// DateTime::ATOM

function next_week($date, $format = 'Y-m-d\TH:i:sP', $weeks = 1)
{
           $date = new DateTime($date);
           $date->modify('+'.$weeks.' week');

    return (string) $date->format($format);
}
