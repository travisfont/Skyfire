<?php

function calculate_age($date, $format = 'm/d/Y')
{
	return floor((strtotime(date($format)) - strtotime($date)) / 31556926);
}

# calculate_age('6/12/1970');

/*
function calculate_age($birthday)
{
    $today = new DateTime();
   // $diff = $today->diff(new DateTime($birthday));
	
	$diff = dateTimeDiff($today, new DateTime($birthday));

    return $diff->y;
}
*/
