<?php

function generate_creditcard_test_number($type = 'visa', $total = 1)
{

	switch($type)
	{
		case 'visa':
			$prefix = array
			(
				"4539",
				"4556",
				"4916",
				"4532",
				"4929",
				"40240071",
				"4485",
				"4716",
				"4"
			);
			$length = 16;
			#$length = 16; // visas are also 13 digits
			break;

		case 'mastercard':
			$prefix = array
			(
				"51",
				"52",
				"53",
				"54",
				"55"
			);
			$length = 16;
			break;

		case 'diners':
			$prefix = array
			(
				"300",
				"301",
				"302",
				"303",
				"36",
				"38"
			);
			$length = 14;
			break;

		case 'enroute':
			$prefix = array
			(
				"2014",
				"2149"
			);
			$length = 15;
			break;

		case 'amex':
		case 'americanexpress':
			$prefix = array
			(
				"34",
				"37"
			);
			$length = 15;
			break;

		case 'voyager':
			$prefix = array("8699");
			$length = 15;
			break;

		case 'discover':
			$prefix = array("6011");
			$length = 16;
			break;

		case 'jcb':
			$prefix = array("35");
			$length = 16;
			break;
	}
	
	$result = array();
	for ($i = 0; $i < $total; $i++)
	{
 
		$cc_number = $prefix[array_rand($prefix)];

		# generate digits
		while (strlen($cc_number) < ($length - 1))
		{
			$cc_number .= rand(0,9);
		}

		# calculate sum
		$sum = 0;
		$pos = 0;

		$reversedcc_number = strrev($cc_number);

		while ($pos < $length - 1) 
		{

			$odd = $reversedcc_number[$pos] * 2;
			if ($odd > 9)
			{
				$odd -= 9;
			}

			$sum += $odd;

			if ($pos != ($length - 2))
			{

				$sum += $reversedcc_number[$pos +1];
			}
			$pos += 2;
		}

		# Calculate check digit

		$checkdigit = ((floor($sum/10) + 1) * 10 - $sum) % 10;
		$cc_number .= $checkdigit;

		// allocate
		$result[] = $cc_number;
    }
	
	if (count($results) > 0)
	{
		return $result;
	}
	else
	{
		return FALSE;
	}

}

// example - will generate 5 visa's
# var_dump(generate_creditcard_test_number('visa', 5));