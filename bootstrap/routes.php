<?php

class route
{
    private $public_url_path;
    private $request_controller;
    private $method;

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

    public function METHOD($type)
    {
        if ($this->request_controller)
        {
            // cleans the request controller string and removes anything that isn't alphanumeric
            $controller = preg_replace('#\W#', '', strtolower($this->request_controller));;
            $full_path  = dirname(__DIR__).'/controllers/'.$controller.'/index.php';

            if (file_exists($full_path))
            {
                require_once $full_path;
            }
            else
            {
                die ('Controller <strong>'.$controller.'</strong> folder and/or index file doesn\'t exist!');
            }
        }
    }

}