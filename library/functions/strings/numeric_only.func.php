<?php

// removes any non-numeric characters from a string

function numeric_only($string)
{
	return preg_replace("/[^0-9,.]/", "", $string);
}
	
?>