<?php

/**
 * HttpFoundation - PHP HTTP layer using Symfony's HttpFoundation for Skyfire
 */

#require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/Resources/stubs/SessionHandlerInterface.php';

spl_autoload_register(function ($classname)
{
    #echo '----> ['.$classname.']<br>';

    $classname = str_replace('Symfony\\Component\\HttpFoundation\\', '', $classname);
    //$spaces = explode('\\', $classname);
    //$filename = __DIR__.DIRECTORY_SEPARATOR.'http-foundation/'.end($spaces).'.php';

    $filename = __DIR__.DIRECTORY_SEPARATOR.'http-foundation/'.$classname.'.php';
    if (is_readable($filename))
    {
        #echo 'DIR ['.$filename.']<br>';
        #echo 'CALL ['.$classname.']';
        if ($classname == 'Request')
        {
            require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/ParameterBag.php';
            require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/FileBag.php';
            require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/ServerBag.php';
            require_once __DIR__.DIRECTORY_SEPARATOR.'http-foundation/HeaderBag.php';
        }
        require_once $filename;
    }
});

use Symfony\Component\HttpFoundation\Request as _Request;

class Request extends _Request {}

