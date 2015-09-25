<?php

// defines the root directory of Skyfire
define('ROOT_DIRECTORY', getcwd());

// Exit early if running an incompatible PHP version to avoid fatal errors (at least PHP 5.3).
if (version_compare(PHP_VERSION, '5.3.0') < 0)
{
    print 'Your PHP installation of version '.PHP_VERSION.' is too old and unsupported by Skyfire.';
    exit;
}
else
{
    // if running a version before PHP 5.4 but after 5.3
    if (version_compare(PHP_VERSION, '5.4.0') < 0)
    {
        require_once 'system/php.5.4.0.php';
    }
}


// sysem files (all require to load)
$system_files = array
(
    'config.autoload',
    'global.constants',
    'route.organizer',
    'library.loader',
    'controller.loader',
    'bootstrap',
);

foreach ($system_files as $file)
{
    require_once 'system/'.$file.'.php';
}
