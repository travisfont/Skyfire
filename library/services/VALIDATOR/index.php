<?php

if (!defined('SESSION_DATA_KEY'))
{
    define('SESSION_DATA_KEY', 'validation.errors');
}

require_once 'src/Validator.php';

// SPL autoloader
spl_autoload_register(function ($classname)
{
    $filename = dirname(__FILE__).DIRECTORY_SEPARATOR.'src/Rules'.DIRECTORY_SEPARATOR.$classname.'.php';
    if (is_readable($filename))
    {
        require_once 'src/RuleInterface.php';
        require_once $filename;
    }
});