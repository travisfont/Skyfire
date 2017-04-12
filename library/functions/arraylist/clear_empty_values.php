<?php

/**
 * clear up (remove values from) an array that contains any element of a falsy value
 * (null, or an empty string, also 0 if $keep_zero is set to FALSE)
 *
 * @param array $array
 * @param bool $keep_zero
 *
 * @return array
 */
function clear_empty_values(array $array, $keep_zero = TRUE)
{
    if ($keep_zero)
    {
        return (array) array_filter($array, function ($value)
        {
            return $value !== NULL && $value !== '';
        });
    }
    else
    {
        return (array) array_filter($array);
    }
}
