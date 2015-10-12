<?php

/**
 * HttpFoundation - PHP HTTP layer using Symfony's HttpFoundation for Skyfire
 */

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


use Symfony\Component\HttpFoundation\Request as _Request;

class Request extends _Request {}

