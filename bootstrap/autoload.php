<?php

if (defined('BASE_DIRECTORY'))
{
    // app routes
    if (class_exists('route') )
    {
        define('HOST_PATH', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        //remove the base directory path and removing any / characters from left or right of the path
        $parameters = explode('/', trim(str_replace(BASE_DIRECTORY, '', HOST_PATH), '/'));

        // registering the users request parameters (url path)
        //route::$parameters = array_reverse($parameters);
        route::$parameters = $parameters;
        require_once '/routes.php';
    }
    else
    {
        die ('Route defined as \'route\' class is missing within the boostrap folder (route.organizer.php)');
    }
}
else
{
    die ('BASE_DIRECTORY path needs to be defined.');
}


