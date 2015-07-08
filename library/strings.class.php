<?php

// String interface and function into object inherence

class Strings extends Controller
{
    protected function generatePassword($length = 9, $strength = 4)
    {
        return generatePassword($length, $strength);
    }
}