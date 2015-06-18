<?php

class Strings
{
    // do a magic function here to pick up functions
    public static function generatePassword($length = 9, $strength = 4)
    {
        require_once 'functions/strings/generatePassword.func.php';
        return generatePassword($length, $strength);
    }
}