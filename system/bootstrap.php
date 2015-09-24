<?php

if (class_exists('cfg'))
{
    // scans the entire config directory (/config/..)
    $config_files = cfg::scanDirectory();

    // iterates through all the folders in the config directory
    foreach ($config_files as $config_file)
    {
        // looks for the route config - special config parsing
        if ($config_file == 'routes.ini')
        {
            $routes = cfg::registerRoutesConfig();
        }
        else // normal config parsing (not a routes config)
        {
            cfg::registerConfig($config_file);
        }
    }

    if (defined('BASE_DIRECTORY'))
    {
        // app routes
        if (class_exists('route'))
        {
            define('HOST_PATH', $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

            // remove the base directory path and removing any / characters from left or right of the path
            $parameters = explode('/', trim(str_replace(BASE_DIRECTORY, '', HOST_PATH), '/'));

            $path = trim(str_replace(BASE_DIRECTORY.'/', '', HOST_PATH));

            /*
            // registering the users request parameters (url path)
            //route::$parameters = array_reverse($parameters);
            route::$parameters = $parameters;

            foreach ($routes as $route)
            {
                route::url($route['REQUEST'])
                      ->controller($route['CONTROLLER'])
                      ->method($route['METHOD']);
            }
            */
            // require_once '/routes.php';
            #var_dump($routes);
            #var_dump($path);
            ##var_dump($parameters);
            #echo '#########################';

            foreach ($routes as $route)
            {
                if ($route['METHOD'] == $_SERVER['REQUEST_METHOD'])
                {
                    $removed_variables_url = rtrim(preg_replace("/{[^}]*}/", '', $route['REQUEST']), '/');
                    #var_dump($removed_variables_url);

                    if (!empty($removed_variables_url) && strpos($path, $removed_variables_url) !== FALSE)
                    {
                        #echo '----> '.$removed_variables_url;
                        $live_url_parameters = explode('/', trim(str_replace($removed_variables_url, '', $path), '/'));
                        // var_dump($live_url_parameters);

                        #var_dump($route['CONTROLLER']);
                        #exit;

                        // cleans the request controller string and removes anything that isn't alphanumeric
                        $controller = preg_replace('#\W#', '', strtolower($route['CONTROLLER']));
                        $full_path  = dirname(__DIR__).'/controllers/'.$controller.'/index.php';

                        // checking if the controller path and file exist
                        if (file_exists($full_path))
                        {
                            require_once $full_path;

                            // extracts the path for the controller and function
                            $elements =  array_reverse(explode('/', $full_path));
                            // retrieves the index function
                            //$index_method = str_replace('.php', '', $elements[0]);

                            // formats the extracted controller object
                            $object = ucwords(strtolower($elements[1]));
                            $class = new $object;

                            // calls the dynamic method with define class
                            //$class->{$index_method}();
                            $class->index();

                            // no need to run (check) anymore routes
                            exit;
                        }
                        else
                        {
                            die ('Controller <strong>'.$controller.'</strong> folder and/or index file doesn\'t exist!');
                        }
                    }

                    // finds all url variables that are like {string}
                    #preg_match_all("/{[^}]*}/", $route['REQUEST'], $matches);
                    //explode($route['REQUEST'])
                    #var_dump($matches);

                }
            }

            die('404');
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
}
else
{
    die ('Configuration library cannot be found and loaded. Cannot continue.');
}