<?php

function percentage_of($percentage, $number)
{
	return $number * ($percentage*.01);
}

// 32% of 467 is:
var_dump(percentage_of(32, 467));