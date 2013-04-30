<?php

function calculate_age($birthday)
{
    $today = new DateTime();
   // $diff = $today->diff(new DateTime($birthday));
	
	$diff = dateTimeDiff($today, new DateTime($birthday));

    return $diff->y;
}

# calculate_age('6/12/1970');