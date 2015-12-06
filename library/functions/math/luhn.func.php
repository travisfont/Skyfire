<?php

function luhn($number)
{
	$number = (string) $number;

	if (!ctype_digit($number))
	{
		// luhn can only be used on numbers!
		return FALSE;
	}

	// Check number length
	$length = strlen($number);

	// Checksum of the card number
	$checksum = 0;

	for ($i = $length - 1; $i >= 0; $i -= 2)
	{
		// Add up every 2nd digit, starting from the right
		$checksum += substr($number, $i, 1);
	}

	for ($i = $length - 2; $i >= 0; $i -= 2)
	{
		// Add up every 2nd digit doubled, starting from the right
		$double = substr($number, $i, 1) * 2;

		// Subtract 9 from the double where value is greater than 10
		$checksum += ($double >= 10) ? ($double - 9) : $double;
	}

	// If the checksum is a multiple of 10, the number is valid
	return ($checksum % 10 === 0);
}
