<?php

// multi-dimensional array sort by values [is a void]
function multi_asort(array &$array)
{
    asort($array);

    foreach ($array as &$value)
    {
        if (is_array($value))
        {
            multi_asort($value);
        }
    }
}