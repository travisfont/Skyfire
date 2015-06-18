<?php

function array_multi_subsort($array, $subkey)
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

	return $c;
}

// sorting through "created" element in the arrays
$data = array_muti_subsort($array, 'created');
print_r($data);