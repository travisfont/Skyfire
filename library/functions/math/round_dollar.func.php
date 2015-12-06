<?php

function round_dollar($amount)
{
    (float) $amount = str_replace('$', '', $amount);

    $pow   = pow(10, 2);
    $ceil  = ceil($amount * $pow) / $pow;
    $floor = floor($amount * $pow) / $pow;

    $pow = pow(10, 3);

    $diff_ceil  = $pow * ($ceil - $amount);
    $diff_floor = $pow * ($amount - $floor) + ($amount < 0 ? -1 : 1);

    if ($diff_ceil >= $diff_floor)
    {
        return $floor;
    }
    else
    {
        return $ceil;
    }
}

// Example
#var_dump(roundDollar(123.45689));
