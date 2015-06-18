<?php

// Note:
// DateTime::ATOM

function nextWeek($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
{
           $date = new DateTime($date);
           $date->modify('+'.$weeks.' week');
    return $date->format($format);
}