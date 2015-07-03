<?php

function getPercentageOf($percentage, $number)
{
	return $number * ($percentage*.01);
}

// 32% of 467 is:
//var_dump(getPercentageOf(32, 467));