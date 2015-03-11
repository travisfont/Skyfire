<?php 

function convertIniFile2Constants($path)
{
    foreach (parse_ini_file($path) as $element => $value)
    {
        if (!defined(strtoupper($element)))
        {
            define(strtoupper($element), $value);
        }
    }
}

convertIniFile2Constants('../config.ini');