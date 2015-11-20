<?php

class RouteOrganizer
{
    public static function Process($routes, $path, $parameters)
    {
        foreach ($routes as $route)
        {
            // if a define method exist in the specific route (else look for a CRUD)
            if (isset($route['METHOD']) && ($route['METHOD'] == $_SERVER['REQUEST_METHOD']))
            {
                if (!isset($route['MODELS']))
                {
                    $route['MODELS'] = NULL;
                }

                // searching for '/' main route first
                if ($path === '' && ltrim(HOST_PATH, BASE_DIRECTORY))
                {
                    self::CallController($route['CONTROLLER'], 200, $route['MODELS']);
                    # self::CallController($route['CONTROLLER'], preg_split('/\s*,\s*/', trim($route['MODELS'])))); //<-- brenchmark this
                    return TRUE; // end foreach loop
                }
                // if (str_replace('/', '', ltrim(HOST_PATH, BASE_DIRECTORY)) === '')

                //$removed_variables_url = (string) rtrim(preg_replace("/{[^}]*}/", '', ltrim($route['REQUEST'], '/')), '/');
                $removed_variables_url = (string) trim(preg_replace('/{[^}]*}/', '', $route['REQUEST']), '/');

                #var_dump('$path: '.$path);
                //var_dump('$removed_variables_url: '.$removed_variables_url);

                #echo '!empty('.$removed_variables_url.') && strpost('.$path.', '.$removed_variables_url.') !== FALSE)<br>';
                if (!empty($removed_variables_url) && strpos($path, $removed_variables_url.'/') !== FALSE)
                {
                    #echo '----> '.$removed_variables_url;
                    $live_url_parameters = explode('/', trim(str_replace($removed_variables_url, '', $path), '/'));
                    //var_dump($live_url_parameters);

                    #var_dump($route['CONTROLLER']);
                    #exit;

                    # if (isset($route['MODELS']))
                    self::CallController($route['CONTROLLER'], 200, $route['MODELS']);
                    # self::CallController($route['CONTROLLER'], preg_split('/\s*,\s*/', trim($route['MODELS'])))); //<-- brenchmark this
                    return TRUE; // end foreach loop
                }

                // finds all url variables that are like {string}
                #preg_match_all("/{[^}]*}/", $route['REQUEST'], $matches);
                //explode($route['REQUEST'])
                #var_dump($matches);
            }
            elseif (isset($route['CRUD']))
            {
                // process CRUD controller by specific method
            }
        }

        return FALSE;
    }

    public static function CallController($controller_name, $response_code = 200, $controller_models = NULL)
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
            // retrieves the index function
            //$index_method = str_replace('.php', '', $elements[0]);

            // formats the extracted controller object
            //$object = ucwords(strtolower($elements[1]));
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

                new $object;
            }
            else
            {
                trigger_error('Controller class <strong>'.$object.'</strong> does not exist. Cannot continue.', E_USER_ERROR);
            }
            //$class  = new $object;echo '<pre>';

            // calls the dynamic method with define class
            //$class->{$index_method}();
            //$class->index();

            // no need to run (check) anymore routes
            // echo'<pre>'; print_r(get_defined_vars()); exit;
            ## exit;
        }
        else
        {
            trigger_error('Controller <strong>'.$controller.'</strong> folder and/or index file doesn\'t exist!', E_USER_ERROR);
        }
    }
}