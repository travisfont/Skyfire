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
    protected function getAddressCoordinates($address)
    { return (NULL) ? (array) NULL : (bool) NULL; }

    /**
     * @return string
     */
    protected function getClientIp()
    { return (string) NULL; }

    /**
     * @return string
     */
    protected function getClientLang()
    { return (string) NULL; }

    /**
     * @param $string
     *
     * @return bool
     */
    protected function isEmail($string)
    { return (bool) NULL; }

    /**
     * @return bool
     */
    protected function isSsl()
    { return (bool) NULL; }
}
