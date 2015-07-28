<?php

// Note:
// DateTime::ATOM

function next_week($date, $weeks = 1, $format = 'Y-m-d\TH:i:sP')
{
           $date = new DateTime($date);
           $date->modify('+'.$weeks.' week');

    return $date->format($format);
}