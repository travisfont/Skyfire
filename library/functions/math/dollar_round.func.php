<?php

function dollar_round($number)
{
    (float) $number = str_replace('$', '', $number);

    $pow = pow(10, 2);
    $ceil = ceil($number * $pow) / $pow;
    $floor = floor($number * $pow) / $pow;

    $pow = pow(10, 3);

    $diffCeil  = $pow * ($ceil-$number);
    $diffFloor = $pow * ($number-$floor) + ($number < 0 ? -1 : 1);

    if($diffCeil >= $diffFloor)
    {
        return $floor;
    }
    else
    {
        return $ceil;
    }
}

// Example
#var_dump(dollar_round(123.45689));