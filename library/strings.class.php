<?php


class Strings extends System
{
    protected function generatePassword($length = 9, $strength = 4)
    {
        return generatePassword($length, $strength);
    }
}