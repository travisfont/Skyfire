<?php

function show_time_left($dbdate)
{
	$end_time = strtotime($dbdate);
	$diff     = $end_time - time();
	$days     = ($diff - ($diff % 86400)) / 86400;
	$diff     =  $diff - ($days * 86400);
	$hours    = ($diff - ($diff % 3600)) / 3600;
	$diff     =  $diff - ($hours * 3600);
	$minutes  = ($diff - ($diff % 60)) / 60;
	$diff     =  $diff - ($minutes * 60);
	$seconds  = ($diff - ($diff % 1)) / 1;

	return $days . "d" . " " . $hours . "h" . " " . $minutes . "m" . " " . $seconds . "s";
}

// echo show_time_left('20014-12-31 23:59:59');
// 12d 11h 59m 59s
