<?php

/**
 * Validates if a string is an email
 *
 * @param string $string
 *
 * @return boolean
 */
function is_email($string)
{
    if (empty($string))
    {
        return FALSE;
    }

    // First, we check that there's one @ symbol, and that the lengths are right
    if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $string))
    {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return FALSE;
    }

    // Split it into sections to make life easier
    $string_array = explode("@", $string);
    $local_array  = explode(".", $string_array[0]);

    for ($i = 0; $i < sizeof($local_array); $i++)
    {
        if (!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
        {
            return FALSE;
        }
    }

    if (!ereg("^\[?[0-9\.]+\]?$", $string_array[1]))
    {
        // Check if domain is IP. If not, it should be valid domain name
        $domain_array = explode(".", $string_array[1]);

        if (sizeof($domain_array) < 2)
        {
            return FALSE; // Not enough parts to domain
        }
        for ($i = 0; $i < sizeof($domain_array); $i++)
        {
            if (!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
            {
                return FALSE;
            }
        }
    }

    return TRUE;
}