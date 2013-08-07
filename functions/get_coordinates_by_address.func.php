<?php

function get_coordinates_by_address($address)
{
    $api_location  = 'http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode(trim($address)).'&sensor=true';
    $data            = json_decode(file_get_contents($api_location));

    return array('lat' => $data->results[0]->geometry->location->lat, 'lng' => $data->results[0]->geometry->location->lng);
}