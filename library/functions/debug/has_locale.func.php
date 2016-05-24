<?php

function has_locale($locale)
{
    setlocale(LC_TIME, $locale);

    $set_locale_month = strftime('%B', strtotime('01/01/2001'));

    setlocale(LC_TIME, locale_get_default());

    if (strtolower(substr($locale, 0, 2)) === 'en')
    {
        if (strtolower($set_locale_month) === 'january')
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    else if (strtolower($set_locale_month) !== 'january')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

// checks if a locate is isntalled on the system. If not, returns FALSE.