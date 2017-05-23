<?php

/**
 * Validate the user's email address
 *
 * @param  $email string the email address to validate
 */
function valid_email($email)
{
	$isValid = TRUE;
	$atIndex = strrpos($email, '@');

	if (is_bool($atIndex) && !$atIndex)
	{
		$isValid = FALSE;
	}
	else
	{
		$domain    = substr($email, $atIndex+1);
		$local     = substr($email, 0, $atIndex);
		$localLen  = strlen($local);
		$domainLen = strlen($domain);

		if ($localLen < 1 || $localLen > 64)
		{
			$isValid = FALSE;
		}
		elseif ($domainLen < 1 || $domainLen > 255)
		{
			$isValid = FALSE;
		}
		elseif ($local[0] == '.' || $local[$localLen-1] == '.')
		{
			$isValid = FALSE;
		}
		elseif (preg_match('/\\.\\./', $local))
		{
			$isValid = FALSE;
		}
		elseif (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
		{
			$isValid = FALSE;
		}
		elseif (preg_match('/\\.\\./', $domain))
		{
			$isValid = FALSE;
		}
		elseif (!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/', str_replace("\\\\", '', $local)))
		{
			if (!preg_match('/^"(\\\\"|[^"])+"$/', str_replace("\\\\", '', $local)))
			{
				$isValid = FALSE;
			}
		}
		if ($isValid && !(checkdnsrr($domain, "MX") || checkdnsrr($domain, "A")))
		{
			$isValid = FALSE;
		}
	}

	return (bool) $isValid;
}
