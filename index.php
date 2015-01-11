<?php

$parameters = explode('/', $_SERVER['REQUEST_URI']);

// sets the main controller
define('CURRENT_CONTROLLER', $parameters[2]);

// removes base parameters
unset($parameters[0], $parameters[1], $parameters[2]);

require 'bootstrap/autoload.php';
