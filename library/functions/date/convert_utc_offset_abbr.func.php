<?php 

// converts UTC offset (+2:00) to a Timezone Name Abbreviation

function convert_utc_offset_abbr($offset)
{
    $timezone = preg_replace('/[^0-9]/', '', $offset);
    $tz       = timezone_name_from_abbr(NULL, $timezone * 3600, TRUE);
    
    if ($tz === FALSE)
    {
        $tz = timezone_name_from_abbr(NULL, $offset * 3600, FALSE);
    }

    return $tz;
}
