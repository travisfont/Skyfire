<?php

class RouteOrganizer
{
    public static function Process(array $routes, string $path, array $parameters)
    {
        foreach ($routes as $route)
        {
            // if a define method exist in the specific route (else look for a CRUD)
            // default request will be GET
            if (isset($route['METHOD']) && ($route['METHOD'] === $_SERVER['REQUEST_METHOD']))
            {
                if (!isset($route['MODELS']))
                {
                    $route['MODELS'] = NULL;
                }

                // searching for '/' main route first
                if ($path === '' && ltrim(HOST_PATH, BASE_DIRECTORY)) // TODO: become a enum
                {
                    self::CallController($route['CONTROLLER'], 200, [], $route['MODELS']);
                    # self::CallController($route['CONTROLLER'], preg_split('/\s*,\s*/', trim($route['MODELS'])))); //<-- brenchmark this
                    return TRUE; // end foreach loop
                }

                $removed_variables_url = (string) trim(preg_replace('/{[^}]*}/', '', $route['REQUEST']), '/');

                if (!empty($removed_variables_url) && strpos($path, $removed_variables_url) !== FALSE)
                {
                    $live_url_parameters = explode('/', trim(str_replace($removed_variables_url, '', $path), '/'));

                    self::CallController($route['CONTROLLER'], 200, self::parseParameters($route['REQUEST'], $live_url_parameters), $route['MODELS']);
                    # self::CallController($route['CONTROLLER'], preg_split('/\s*,\s*/', trim($route['MODELS'])))); //<-- brenchmark this
                    return TRUE; // end foreach loop
                }

            }
            elseif (isset($route['CRUD']))
            {
                // TODO: process CRUD controller by specific method
            }
        }

        return FALSE;
    }

    public static function CallController($controller_name, $response_code = 200, $parameters = array(), $controller_models = NULL)
    {
        // cleans the request controller string and removes anything that isn't alphanumeric
        $controller = preg_replace('#\W#', '', strtolower($controller_name));
        $full_path  = PARENT_DIRECTORY.'/controllers/'.$controller.'/index.php';

        // checking if the controller path and file exist
        if (file_exists($full_path))
        {
            require_once $full_path;

            // extracts the path for the controller and function
            $elements =  array_reverse(explode('/', $full_path));

            // formats the extracted controller object
            $object = ucwords(strtolower($elements[1]));

            if (class_exists($object))
            {
                // calling all the models classes
                if (!empty($controller_models))
                {
                    $controller_models = array_map('trim', explode(',', $controller_models));

                    require_once PARENT_DIRECTORY.'/system/abstract.model.php';
                    foreach ($controller_models as $model)
                    {
                        require_once PARENT_DIRECTORY.'/models/'.strtolower($model).'.php';
                    }
                }

                // composer autoloader - if exist
                if (is_readable(PARENT_DIRECTORY.'/library/packages/autoload.php'))
                {
                    require_once PARENT_DIRECTORY.'/library/packages/autoload.php';
                }

                // calls the controller constructor
                // NOTE: currently no error detection if constructor doesn't exist
                //http_response_code($response_code);

                // setting the global status code
                http_response_code($response_code);
                $_SERVER['REDIRECT_STATUS'] = $response_code;

                new $object((object) $parameters);
            }
            else
            {
                trigger_error('Controller class <strong>'.$object.'</strong> does not exist. Cannot continue.', E_USER_ERROR);
            }
        }
        else
        {
            trigger_error('Controller <strong>'.$controller.'</strong> folder and/or index file doesn\'t exist!', E_USER_ERROR);
        }
    }

    public static function parseParameters($route_request, $live_url_parameters)
    {
        $parameters = array();
        $key        = 0;

        foreach (explode('/', $route_request) as $request)
        {
            // looks for route request that begin with { and end with {
            // TODO: regex on this condition here might be better
            // checking the first character and last character
           if ($request[0] == '{' && substr($request, -1) == '}')
            {
                // allows only characters A to a (lower and upper) and 1 to 2
                $parameters[preg_replace('/[^A-Za-z0-9]/', '', $request)] = preg_replace('/[^A-Za-z0-9]/', '', $live_url_parameters[$key++]);
            }
        }

        // return the build an array from the route request
        return $parameters;
    }
}