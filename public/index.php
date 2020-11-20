<?php

// Exit early with a warning if running an incompatible PHP version to avoid fatal errors (at least PHP 5.5).
if (version_compare(PHP_VERSION, '5.4.9') < 0)
{
    trigger_error('Your PHP installation of version '.PHP_VERSION.' is too old and unsupported by Claritie.', E_USER_ERROR);
}
else
{
    // defines the root directory of Skyfire
    define('ROOT_DIRECTORY',   getcwd());
    define('PARENT_DIRECTORY', dirname(getcwd()));
    define('WHOOPS_DIRECTORY', PARENT_DIRECTORY.'/library/packages/filp/whoops/src/');

    /* error stack displaying */
    spl_autoload_register(function ($class)
    {
        // only allows a class string through if the the first occurrence contains Whoops
        if (strstr($class, '\\', TRUE) === 'Whoops')
        {
            $class = str_replace('\\', '/', $class);
            if (is_readable(WHOOPS_DIRECTORY.$class.'.php'))
            {
                // these files never autoload on syntax errors (not sure why...)
                if ($class == 'Whoops\Handler\PrettyPageHandler')
                {
                    require_once WHOOPS_DIRECTORY.'Whoops\Util\TemplateHelper.php';
                    require_once WHOOPS_DIRECTORY.'Whoops\Util\Misc.php';
                    require_once WHOOPS_DIRECTORY.'Whoops\Exception\Formatter.php';
                }

                require_once WHOOPS_DIRECTORY.$class.'.php';
            }
        }
    });


    if (class_exists('\Whoops\Run'))
    {
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
    }

    // core files (all required to be loaded in specific order)
    foreach ([
        'config.autoload',
        'global.constants',
        'route.organizer',
        'library.loader',
        'strict.type',
        'enum.type',
        'controller.loader',
        'bootstrap'
    ] as $file)
    {
        require_once PARENT_DIRECTORY.'/system/'.$file.'.php';
    }


}
