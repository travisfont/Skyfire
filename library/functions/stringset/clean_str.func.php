<?php

/**
 * Remove tags and html entities from a string.
 *
 * @param $string
 *
 * @return string
 */
function clean_str($string)
{
	// get rid of tags
	$string = strip_tags($string);

	// get rid of html entities
	$string = preg_replace("/&#?[a-z0-9]+;/i", "", $string);

	// trim the string
	$string = trim($string);

	return (string) $string;
}
