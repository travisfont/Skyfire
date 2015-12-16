<?php

// Network interface and function into object inherence

class Network extends Controller
{
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

    // isSsl
    protected function is_ssl()
    {
        return is_ssl();
    }

    protected function whois($domain, $registrar = FALSE)
    {
        return whois($domain, $registrar);
    }

    // getClientLang
    protected function get_client_lang()
    {
        return get_client_lang();
    }
}
