<?php

// removes any non-numeric characters from a string

function strip_to_numeric($string)
{
	return trim(preg_replace('/[^0-9,.]/', '', $string));
}
