<?php

// removes any non-numeric characters from a string

function strip_to_numeric($string)
{
	$string = trim(preg_replace('/[^0-9,.-]/', '', $string));

	$keep_negative = NULL;

	if (isset($string{0}) && $string{0} == '-')
	{
		$keep_negative = '-';
	}

	$string = preg_replace('/[^0-9,.]/', '', $string);

	if (!empty($string))
	{
		if (strpos($string, '.') !== FALSE)
		{
			return (float) ($keep_negative.$string);
		}

		if (strpos($string, ',') !== FALSE)
		{
			return (float) ($keep_negative.$string);
		}

		return (int) ($keep_negative.$string);
	}
	else
	{
		return FALSE;
	}

}