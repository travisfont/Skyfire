<?php

/**
 * @param array $array
 * @param $subkey
 *
 * @return array
 */
function subsort_array(array $array, $subkey)
{
	$b = array(); $c = array();

	foreach ($array as $k => $v)
	{
		$b[$k] = strtolower($v[$subkey]);
	}

	asort($b);
	foreach ($b as $key => $val)
	{
		$c[] = $array[$key];
	}

	return (array) $c;
}

// sorting through "created" element in the arrays
//$data = subsort_array($array, 'created');
//print_r($data);
