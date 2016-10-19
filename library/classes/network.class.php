<?php

// Network interface and function into object inherence

class Network extends Controller
{
    protected function get_address_coordinates($address)
    {
        //return get_address_coordinates($address);
        return self::parameters(
        [
            'address' =>  DT::STRING,
        ])
        ->call(__FUNCTION__)
        ->with($address)
        ->returning([DT::TYPE_ARRAY, DT::BOOL]);
    }

    protected function get_client_ip()
    {
        //return (string) get_client_ip();
        return (string) self::parameters()->call(__FUNCTION__)
                                          ->returning(DT::IPV4);
    }

    protected function get_client_lang()
    {
        //return get_client_lang();
        return (string) self::parameters()->call(__FUNCTION__)
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

    protected function is_ssl()
    {
        //return (bool) is_ssl();
        return (bool) self::parameters()->call(__FUNCTION__)
                                        ->returning(DT::BOOL);
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
}
