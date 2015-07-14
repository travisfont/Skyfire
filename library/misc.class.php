<?php

// Misc interface and function into object inherence

class Misc extends Controller
{
    // colorAabbr
    protected function color_abbr($abbr)
    {
        return color_abbr($abbr);
    }

    // getAddressCoordinates
    protected function get_address_coordinates($address)
    {
        return get_address_coordinates($address);
    }

    // getClientIp
    protected function get_client_ip()
    {
        return get_client_ip();
    }

    // getUserDefinedConstants
    protected function get_user_defined_constants()
    {
        return get_user_defined_constants();
    }
    
}