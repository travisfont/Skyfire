<?php

/**
 * Implodes any dimension into a single string
 *
 * @param $glue
 * @param $array
 *
 * @return string
 */
function implode_all($glue, $array)
{
    for ($i = 0; $i < count($array); $i++)
    {
        if (is_array($array[$i]))
        {
            $array[$i] = implode_all($glue, $array[$i]);
        }
    }

    return (string) implode($glue, $array);
}
