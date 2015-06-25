<?php

// String interface and function into object inherence

class Strings extends System
{
    protected function generatePassword($length = 9, $strength = 4)
    {
        return generatePassword($length, $strength);
    }
}