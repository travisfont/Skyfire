<?php

/**
 * @param $string
 *
 * @return false|string
 */
function date_yesterday($string)
{
	return date($string, time() - 60 * 60 * 24);
}

# date_yesterday("m/d/Y");
