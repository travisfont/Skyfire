<?php

class load
{
    public static function library($class)
    {
        require_once '/classes/'.$class.'.class.php';
    }
}