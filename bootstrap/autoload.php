<?php

require_once 'global.constants.php';
require_once 'route.organizer.php';

// automatically scan and register the entire class folder
// ....

// app routes
if (class_exists('route'))
{
    require_once '/routes.php';
}
else
{
    die ('Route defined as \'route\' class is missing within the boostrap folder (route.organizer.php)');
}

