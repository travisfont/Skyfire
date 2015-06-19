<?php

class Contact
{
    public function index()
    {
        load::library(SF::CONSTANTS);

        echo '######################';
        var_dump(Days::FRI);

        load::library(SF::STRINGS);
        $test_string = Strings::generatePassword();

        var_dump($test_string);

        echo 'contact controller works';
    }
}