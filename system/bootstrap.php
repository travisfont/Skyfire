<?php

if (class_exists('cfg'))
{
    // scans the entire config directory (/config/..)
    // iterates through all the folders in the config directory
    foreach (cfg::scanDirectory() as $config_file)
    {
        // looks for the route config - special config parsing
        switch ($config_file)
        {
            case 'errors.ini':
                $errors = cfg::registerErrorsConfig();
                break;
            case 'routes.ini':
                $routes = cfg::registerRoutesConfig();
                break;
            default: // normal config parsing (not a routes config)
                cfg::registerConfig($config_file);
        }
    }

    if (defined('BASE_DIRECTORY'))
    {
        define('HOST_PATH', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

        // remove the base directory path and removing any / characters from left or right of the path
        $parameters = explode('/', trim(str_replace(BASE_DIRECTORY, '', HOST_PATH), '/'));

        // registering the users request parameters (url path)
        $path = trim(str_replace(BASE_DIRECTORY.'/', '', HOST_PATH));

        // Processing the routes with the current request
        RouteOrganizer::Process($routes, $path, $parameters);

        // the process completed and no active route was reached (defaukt behavior returns a 404 error
        if (isset($errors[404][$_SERVER['REQUEST_METHOD']]->controller))
        {
            // calls the controller set for 404 within errors.ini
            RouteOrganizer::CallController($errors[404][$_SERVER['REQUEST_METHOD']]->controller, 404);
        }
        exit;
    }
    else
    {
        die ('BASE_DIRECTORY path needs to be defined.');
    }
}
else
{
    die ('Configuration library cannot be found and loaded. Cannot continue.');
}