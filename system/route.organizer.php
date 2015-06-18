<?php

class route
{
    private $public_url_path;
    private $request_controller;
    private $method;

    public static $parameters;

    /*
    public static $instances = array();
    public function __construct()
    {
        self::$instances[] = $this;
    }
    */

    public static function url($url)
    {
        $self = new self;
        $self->public_url_path = $url;

        return $self;
    }

    public function controller($class)
    {
        if ($this->public_url_path)
        {
            $this->request_controller = $class;

            return $this;
        }
    }

    public function method($type = FALSE)
    {
        // if both url and controller are define before method
        if ($this->public_url_path && $this->request_controller)
        {
            // checking if the request method is set (this is required for the controller)
            if (!empty($type) && in_array($type, array('GET', 'POST')))
            {

                //$route_path = array_reverse(explode('/', $this->public_url_path));
                $route_path = explode('/', $this->public_url_path);

                var_dump($route_path);

                foreach ($route_path as $key => $path)
                {
                    // if the path is not empty or isn't a variable value
                    if (!empty($path) && $path[0] != '{')
                    {
                        var_dump($path);

                        // routes url matches real request url path
                        if (static::$parameters[$key] == $path)
                        {
                            // cleans the request controller string and removes anything that isn't alphanumeric
                            $controller = preg_replace('#\W#', '', strtolower($this->request_controller));
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
                    }
                }


            }
            else
            {
                die ('Pease define <strong>->method()</strong> with either SF::GET or SF::POST!');
            }



        }
    }

}