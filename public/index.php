<?php

// defines the root directory of Skyfire
define('ROOT_DIRECTORY',   getcwd());
define('PARENT_DIRECTORY', dirname(getcwd()));
define('WHOOPS_DIRECTORY', '../library/packages/whoops/src/');

// TODO: eventually move this into the system process
spl_autoload_register(function ($class)
{
    if (strstr($class, '\\', TRUE) == 'Whoops');
    {
        require_once WHOOPS_DIRECTORY.$class.'.php';
    }
});

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// Exit early if running an incompatible PHP version to avoid fatal errors (at least PHP 5.4).
if (version_compare(PHP_VERSION, '5.4.0') < 0)
{
    print 'Your PHP installation of version '.PHP_VERSION.' is too old and unsupported by Skyfire.';
    exit;
}
else
{
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