<?php

function simple_address_verify($address)
{
	if (
		isset($address['address']) &&
		isset($address['city'])    &&
		isset($address['state'])   &&
		isset($address['zip'])
	)
	{
		if(strlen((int) $address['zip']) != 5)
		{
			return FALSE;
		}

		$fulladdress = preg_replace('/^[0-9]+\ +/', '', $address['address']);
		$fulladdress .= ', '.$address['city'];
		$fulladdress .= ', '.$address['state'];
		$fulladdress .= ', '.$address['zip'];

		$api_location  = 'http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode(trim($fulladdress)).'&sensor=true';
		$data            = json_decode(file_get_contents($api_location));

		// checking if the 5th level array exists first
		if (isset($data->results[0]->address_components[4]))
		{
			// checking the country array short name object is USA
			if (isset($data->results[0]->address_components[4]->short_name) && $data->results[0]->address_components[4]->short_name == 'US')
			{
				return TRUE;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}


		var_dump($data);
	}
	else
	{
		return FALSE;
	}
}

/*
$address = array
(
    'address' => '123 N.W. 12th Ave.',
    'city'    => 'Coral Springs',
    'state'   => 'FL',
    'zip'     => 33065
);

$address = array
(
    'address' => 'Luxembourg, Luxembourg City',
    'city'    => 'Luxembourg',
    'state'   => 'FL',
    'zip'     => 33065
);

$address = array
(
    'address' => 'magevej 22',
    'city'    => 'sakskobing in denmark',
    'state'   => 'AL',
    'zip'     => 49900
);

$address = array
(
    'address' => '123 N.W. 12th Ave.',
    'city'    => 'Coral Springs',
    'state'   => 'FL',
    'zip'     => 4990
);

$test = Address::verify($address);
var_dump($test);
*/