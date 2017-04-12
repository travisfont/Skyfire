<?php

/**
 * @param array $array
 *
 * @return null
 */
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

    return NULL;
}
