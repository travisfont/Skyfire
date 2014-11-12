<?php 

// converts UTC offset (+2:00) to a Timezone Name Abbreviation
function utc_offset2name_abbr($offset)
{
    $timezone = preg_replace('/[^0-9]/', '', $offset);
    $tz       = timezone_name_from_abbr(null, $timezone * 3600, true);
    
    if ($tz === false)
    {
        $tz = timezone_name_from_abbr(null, $offset * 3600, false);
    }
    return $tz;
}

// alias
function UTCOffset2NameAbbr($offset)    {
  return utc_offset2name_abbr($offset); }