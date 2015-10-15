<?php

/**
 * HttpFoundation - PHP HTTP layer using Symfony's HttpFoundation for Skyfire
 */

if (!interface_exists('SessionHandlerInterface'))
{
    require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/Resources/stubs/SessionHandlerInterface.php';
}

spl_autoload_register(function ($classname)
{
    $classname = str_replace('Symfony\\Component\\HttpFoundation\\', '', $classname);
    $filename  = __DIR__.DIRECTORY_SEPARATOR.'http-foundation/'.$classname.'.php';

    if (is_readable($filename))
    {
        switch ($classname)
        {
            case 'Request':
                require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/ParameterBag.php';
                require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/FileBag.php';
                require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/ServerBag.php';
                require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/HeaderBag.php';
                break;
        }

        require_once $filename;
    }
});



use Symfony\Component\HttpFoundation\AcceptHeader     as _AcceptHeader;
use Symfony\Component\HttpFoundation\Cookie           as _Cookie;
use Symfony\Component\HttpFoundation\JsonResponse     as _JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse as _RedirectResponse;
use Symfony\Component\HttpFoundation\Request          as _Request;
use Symfony\Component\HttpFoundation\Response         as _Response;

class AcceptHeader     extends _AcceptHeader {}
class Cookie           extends _Cookie {}
class JsonResponse     extends _JsonResponse {}
class RedirectResponse extends _RedirectResponse {}
class Response         extends _Response {}
class Request          extends _Request
{
    public static function fromGet()
    {
        return new Request($_GET);
    }

    public static function fromPost()
    {
        return new Request($_POST);
    }

    public static function fromCookies()
    {
        return new Request($_POST);
    }

    public static function fromFiles()
    {
        return new Request($_FILES);
    }

    public static function fromServer()
    {
        return new Request($_SERVER);
    }
}

