<?php

define('BASE_DIRECTORY', 'localhost/Skyfire');

require_once 'bootstrap/global.constants.php';
require_once 'bootstrap/route.organizer.php';
require_once 'bootstrap/class.loader.php';

// automatically scan and register the entire class folder
// ....

//var_dump($parameters); // paraemter three is the controller

// sets the main controller
//define('CURRENT_CONTROLLER', $parameters[2]);

// removes base parameters
//unset($parameters[0], $parameters[1], $parameters[2]);

require_once 'bootstrap/autoload.php';
