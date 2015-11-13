<?php

// Exit early if running an incompatible PHP version to avoid fatal errors (at least PHP 5.5).
if (version_compare(PHP_VERSION, '5.4.0') < 0)
{
    print 'Your PHP installation of version '.PHP_VERSION.' is too old and unsupported by Skyfire.';
    exit;
}
else
{
    // defines the root directory of Skyfire
    define('ROOT_DIRECTORY',   getcwd());
    define('PARENT_DIRECTORY', dirname(getcwd()));
    define('WHOOPS_DIRECTORY', '../library/packages/filp/whoops/src/');

    // TODO: eventually move this into the system process
    spl_autoload_register(function ($class)
    {
        // only allows a class string through if the the first occurance contains Whoops
        if (strstr($class, '\\', TRUE) == 'Whoops');
        {
            if (is_readable(WHOOPS_DIRECTORY.$class.'.php'))
            {
                //require_once WHOOPS_DIRECTORY.'Whoops\Util\TemplateHelper.php';
                //require_once WHOOPS_DIRECTORY.'Whoops\Util\Misc.php';
                require_once WHOOPS_DIRECTORY.$class.'.php';
            }
        }
    });

    $whoops = new \Whoops\Run;
    $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
    $whoops->register();

    // sysem files (all require to load)
    foreach (array
    (
        'config.autoload',
        'global.constants',
        'route.organizer',
        'library.loader',
        'controller.loader',
        'bootstrap',
    ) as $file)
    {
        require_once PARENT_DIRECTORY.'/system/'.$file.'.php';
    }
}