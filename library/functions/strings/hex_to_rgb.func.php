<?php 

function hex_to_rgb($hex, $string = FALSE)
{
	$hex = str_replace('#', '', $hex);

	if (strlen($hex) == 3)
	{
		$r = hexdec(substr($hex, 0, 1).substr($hex, 0, 1));
		$g = hexdec(substr($hex, 1, 1).substr($hex, 1, 1));
		$b = hexdec(substr($hex, 2, 1).substr($hex, 2, 1));
	}
	else
	{
		$r = hexdec(substr($hex, 0, 2));
		$g = hexdec(substr($hex, 2, 2));
		$b = hexdec(substr($hex, 4, 2));
	}

	$rgb = array($r, $g, $b);

	if ($string)
	{
	   return (string) implode(",", $rgb); // returns the rgb values separated by commas
	}
	else
	{
		return (array) $rgb; // returns an array with the rgb values
	}
}
