<?php

// Network interface and function into object inherence

class SF_Network extends Controller
{
    protected function getAddressCoordinates($address)
    { return (NULL) ? (array) NULL : (bool) NULL; }

    protected function getClientIp()
    { return (string) NULL; }

    protected function getClientLang()
    { return (string) NULL; }

    protected function isEmail($string)
    { return (bool) NULL; }

    protected function isSsl()
    { return (bool) NULL; }
}
