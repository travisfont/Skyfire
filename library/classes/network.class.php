<?php

/**
 * Class Network - Skyfire PHP
 *
 * Network interface and function into object inherence
 */
class Network extends Controller
{
    /**
     * @param $address
     *
     * @return array|bool
     */
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

    /**
     * @return string
     */
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

    /**
     * @return string
     */
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

    /**
     * @param $string
     *
     * @return bool
     */
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

    /**
     * @return bool True if SSL, false if not used
     */
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

    protected function redirect_subdomain($subdomain)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'subdomain' => DT::STRING,
            ])
            ->call(__FUNCTION__)
            ->with($subdomain)
            ->returning(DT::VOID);
        }
        else
        {
            return redirect_subdomain($subdomain);
        }
    }

    /**
     * @param $domain
     * @param bool $registrar
     *
     * @return bool|string
     */
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
