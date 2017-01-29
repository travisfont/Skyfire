<?php

// Network interface and function into object inherence

class Network extends Controller
{
    protected function get_address_coordinates($address)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'address' =>  DT::STRING,
            ])
            ->call(__FUNCTION__)
            ->with($address)
            ->returning([DT::TYPE_ARRAY, DT::BOOL]);
        }
        else
        {
            return get_address_coordinates($address);
        }
    }

    protected function get_client_ip()
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters()->call(__FUNCTION__)
                                              ->returning(DT::IPV4);
        }
        else
        {
            return (string) get_client_ip();
        }
    }

    protected function get_client_lang()
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters()->call(__FUNCTION__)
                                              ->returning(DT::STRING);
        }
        else
        {
            return (string) get_client_lang();
        }
    }

    protected function is_email($string)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'string' =>  DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($string)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_email($string);
        }

    }

    protected function is_ssl()
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters()->call(__FUNCTION__)
                                            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_ssl();
        }

    }

    protected function whois($domain, $registrar = FALSE)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'domain'    =>  DT::STRING,
                'registrar' => [DT::STRING, DT::BOOL]
            ])
            ->call(__FUNCTION__)
            ->with($domain, $registrar)
            ->returning([DT::STRING, DT::BOOL]);
        }
        else
        {
            return whois($domain, $registrar);
        }
    }
}
