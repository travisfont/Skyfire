<?php

class Contact
{
    public function index()
    {
        load::library('constants');

        echo '######################';
        var_dump(Days::FRI);

        load::library('strings');
        $test_string = Strings::generatePassword();

        var_dump($test_string);

        echo 'contact controller works';
    }
}