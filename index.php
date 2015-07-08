<?php

// replace this with a ini file in the config folder FOR config.autoload
define('BASE_DIRECTORY', 'localhost/Skyfire');

$system_files = array
(
    'config.autoload',
    'global.constants',
    'route.organizer',
    'library.loader',
    'controller.loader',
    'controller.loader',
    'bootstrap',
);

foreach ($system_files as $file)
{
    require_once 'system/'.$file.'.php';
}
