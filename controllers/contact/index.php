<?php

class Contact extends Controller
{
    public function index()
    {
        //load::library(SF::CONSTANTS);
        //var_dump(Days::FRI);

        echo '######################';
        //load::package('csmoth/ggoener')->as_('Ggoener');

        load::library(SF::STRINGS);
        //$test_string = Strings::generatePassword();
        $test_string = Strings::generate_password();

        var_dump($test_string);

        echo 'contact controller works';
    }
}