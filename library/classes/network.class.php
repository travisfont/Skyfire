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
        //return whois($domain, $registrar);
        return self::parameters(
        [
            'domain'    =>  DT::STRING,
            'registrar' => [DT::STRING, DT::BOOL]
        ])
        ->call(__FUNCTION__)
        ->with($domain, $registrar)
        ->returning([DT::STRING, DT::BOOL]);
    }

    // getClientLang (TODO: THIS FUNCTION REQUIRES TESTING - VOID PARAMETERS)
    protected function get_client_lang()
    {
        //return get_client_lang();
        return (string)
                self::parameters()->call(__FUNCTION__)
                                  ->returning(DT::STRING);
    }

    protected function is_email($string)
    {
        //return (bool) is_email($string);
        return (bool) self::parameters(
        [
            'string' =>  DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($string)
        ->returning(DT::BOOL);
    }

}
