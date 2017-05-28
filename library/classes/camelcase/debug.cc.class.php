<?php

/**
 * Class Debug - Skyfire PHP
 *
 * Debug interface and function into object inherence
 */
class Debug extends Controller
{
    /**
     * @param string $type
     *
     * @return array
     */
    protected function getDefineConstants($type = 'user')
    { return (array) NULL; }

    /**
     * @return array
     */
    protected function getUserDefinedConstants()
    { return (array) NULL; }

    /**
     * @param $locale
     *
     * @return bool
     */
    protected function hasLocale($locale)
    { return (bool) NULL; }

    /**
     * @param $boolean
     * @param $exception
     * @param string $message
     *
     * @throws Exception following the first paremter if true or false
     */
    protected function throwIf($boolean, $exception, $message = '')
    { return NULL; }

    /**
     * @param $value mixed $value The value to get the info for
     *
     * @return string The info about the value as string
     */
    protected function varInfo($value)
    { return (string) NULL; }
}
