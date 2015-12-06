<?php

function round_mins($hour, $minutes = '1', $format = 'H:i')
{
    $seconds = strtotime($hour);
    $rounded = round($seconds / ($minutes * 60)) * ($minutes * 60);

    return date($format, $rounded);
}

#echo round_mins('10:26:11', 10);	// will round to 10:30
#echo round_mins('10:28:21', 5);	// will round to 10:30
#echo round_mins('10:26:11', 5);	// will round to 10:25
#echo round_mins('10:21:32');		// will round to 10:22
#echo round_mins('10:21:10');		// will round to 10:21
#echo round_mins('10:21:10', 5);	// will round to 10:20
