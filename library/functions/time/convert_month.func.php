<?php

/**
 * @param $number
 * @param array $args
 *
 * @return string
 */
function convert_month($number, array $args = array('lang' => 'fr', 'ucword' => FALSE, 'dots' => FALSE, 'long' => FALSE))
{
    if (is_int($number))
    {
        if ($number <= 12)
        {
            if (strtolower($args['lang']) == 'en')
            {
                $months = array
                (
                    'jan.',
                    'feb.',
                    'mar.',
                    'apr.',
                    'may',
                    'june',
                    'july',
                    'aug.',
                    'sept.',
                    'oct.',
                    'nov.',
                    'dec.'
                );
            }
            else if (strtolower($args['lang']) == 'fr')
            {
                $months = array
                (
                    'janv.',
                    'févr.',
                    'mars',
                    'avril',
                    'mai',
                    'juin',
                    'juil.',
                    'août',
                    'sept.',
                    'oct.',
                    'nov.',
                    'déc.'
                );
            }
            else
            {
                return (bool) FALSE;
            }

            $month = $months[($number - 1)];

            if ($args['ucword'] === TRUE)
            {
                $month = ucwords($month);
            }

            if ($args['dots'] === FALSE)
            {
                $month = rtrim($month, '.');
            }

            if ($args['long'] === FALSE)
            {
                $month = substr($month, 0, 4);
            }

            return (string) $month;
        }
        else
        {
            trigger_error('convertMonth() requires a integer under 12 to convert!', E_USER_ERROR);
        }
    }
    else
    {
        trigger_error('convertMonth() requires a integer to convert!', E_USER_ERROR);
    }
}
// reference:
// http://library.princeton.edu/departments/tsd/katmandu/reference/months.html
