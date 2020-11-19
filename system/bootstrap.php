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


        if (strtoupper(BASE_DIRECTORY) !== strtoupper($_SERVER['HTTP_HOST'])) {
            trigger_error('Base_Directory in enviroments.ini does not match your current host: '.
                BASE_DIRECTORY.' on '.$_SERVER['HTTP_HOST'],
            E_USER_ERROR);
        }

        // remove the base directory path and removing any / characters from left or right of the path
        $parameters = explode('/', trim(str_replace(strtolower(BASE_DIRECTORY), '', HOST_PATH), '/'));

        // registering the users request parameters (url path)
        $path = trim(str_replace(strtolower(BASE_DIRECTORY).'/', '', HOST_PATH));

        #var_dump(HOST_PATH);
        #var_dump($_SERVER['REQUEST_URI']);
        //var_dump(BASE_DIRECTORY); // $_SERVER['REQUEST_URI']
        //var_dump($_SERVER); // $_SERVER['REQUEST_URI']
        //var_dump($path); // $_SERVER['REQUEST_URI']
        //var_dump(ltrim($path, $_SERVER['HTTP_HOST'].'/'));

        #var_dump($routes);
        #var_dump($path);
        #var_dump($parameters);
        #var_dump('#####################################');

        // Processing the routes with the current request (returns false if no routes were reached)
        if (isset($routes) && !RouteOrganizer::Process($routes, $path, $parameters))
        {
            // the process completed and no active route was reached (default behavior returns a 404 error)
            if (isset($errors)    &&
                is_array($errors) &&
                isset($errors[404][$_SERVER['REQUEST_METHOD']]->controller))
            {
                // calls the controller set for 404 within errors.ini
                RouteOrganizer::CallController($errors[404][$_SERVER['REQUEST_METHOD']]->controller, 404);
            }
            else
            {
                trigger_error('errors.ini needs to be defined.', E_USER_ERROR);
            }
        }
        elseif(!isset($routes))
        {
            trigger_error('routes.ini needs to be defined.', E_USER_ERROR);
        }
    }
    else
    {
        trigger_error('BASE_DIRECTORY path needs to be defined.', E_USER_ERROR);
    }
}
else
{
    trigger_error('Configuration library class \'cfg\' cannot be found and loaded. Cannot continue.', E_USER_ERROR);
}