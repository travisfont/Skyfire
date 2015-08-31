<?php

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
