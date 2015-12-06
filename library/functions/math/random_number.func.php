<?php

function random_number($digits, $leading_zeros = FALSE)
{
	if ($leading_zeros === FALSE)
	{
		return rand(pow(10, $digits-1), pow(10, $digits)-1);
	}
	if ($leading_zeros === TRUE)
	{
		return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
	}
}
