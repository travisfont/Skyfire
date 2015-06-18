<?php

// note: query limit of 2,500 requests per da

function get_address_coordinates($address)
{
    $api_location = 'http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode(trim($address)).'&sensor=false';
    $data         = json_decode(file_get_contents($api_location));

    if (isset($data->results[0]->geometry->location->lat) && isset($data->results[0]->geometry->location->lng))
    {
        return array('lat' => $data->results[0]->geometry->location->lat, 'lng' => $data->results[0]->geometry->location->lng);
    }
    else
    {
        return FALSE;
    }
}
