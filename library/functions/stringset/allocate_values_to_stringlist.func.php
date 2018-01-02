<?php

/**
 * Turns an array of values into a string list
 *
 * @param array $values
 * @param int $valid_integer
 *
 * @return string
 */
function allocate_values_to_stringlist($values = array(), $valid_integer = 1)
{
    $list = array();

    foreach ($values as $value)
    {
        foreach ($value as $key => $string_value)
        {
            // no string bigger than 255 is allow as a value
            if (strlen($key) > 255) continue;

            // compare valid integer with the array key value
            if ((int) $key == (int) $valid_integer)
            {
                $list[] = $string_value;
            }
        }
    }

    return (string) implode(', ', $list);
}
