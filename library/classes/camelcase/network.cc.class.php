<?php

// Network interface and function into object inherence

class Network extends Controller
{
    protected function getAddressCoordinates($address)
    { return var_export(NULL); }

    protected function getClientIp()
    { return (string) NULL; }

    protected function isSsl()
    { return (bool) NULL; }

    protected function whois($domain, $registrar = FALSE)
    { return var_export(NULL); }

    protected function getClientLang()
    { return (string) NULL; }

    protected function isEmail($string)
    { return (bool) NULL; }
}
