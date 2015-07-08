<?php

class Contact extends Controller
{
    public function index()
    {
        //load::library(SF::CONSTANTS);
        //var_dump(Days::FRI);

        echo '######################';

        //load::library(SF::SYSTEM);
        load::library(SF::STRINGS);
        $test_string = Strings::generatePassword(); // doesn't work when empty parameters

        var_dump($test_string);

        echo 'contact controller works';
    }
}