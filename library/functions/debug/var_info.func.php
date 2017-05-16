<?php

/**
 * Get human-readable info about the type of the value
 *
 * @param $value mixed $value The value to get the info for
 *
 * @return string The info about the value as string
 */
function var_info($value)
{
    if ($value === NULL)
    {
        return 'null';
    }

    if (is_array($value))
    {
        if (is_callable($value))
        {
            return 'callable array';
        }

        return 'array';
    }

    if (is_bool($value))
    {
        return $value ? 'true' : 'false';
    }

    if (is_float($value))
    {
        if (is_infinite($value))
        {
            return 'infinite float';
        }

        if (is_nan($value))
        {
            return 'invalid float';
        }

        if ($value > 0.0)
        {
            return 'positive float';
        }

        if ($value < 0.0)
        {
            return 'negative float';
        }

        return 'zero float';
    }

    if (is_int($value))
    {
        if ($value > 0)
        {
            return 'positive int';
        }

        if ($value < 0)
        {
            return 'negative int';
        }

        return 'zero int';
    }

    if (is_object($value))
    {
        return get_class($value);
    }

    if (is_string($value))
    {
        if (is_numeric($value))
        {
            return 'numeric string';
        }

        if (is_callable($value))
        {
            return 'callable string';
        }

        return 'string';
    }

    $resource_type = @get_resource_type($value);

    if (is_resource($value))
    {
        return $resource_type.' resource';
    }

    if (strtolower($resource_type) == 'unknown')
    {
        return 'invalid resource';
    }

    return 'unknown';
}

// Documenation infor about this function available at:
// https://wiki.php.net/rfc/var_info
