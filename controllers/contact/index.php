<?php

class Contact extends Controller
{
    public function __construct()
    {
        //load::library(SF::CONSTANTS);
        //var_dump(Days::FRI);

        echo '######################';
        //load::package('csmoth/ggoener')->use_as('Ggoener');

        load::library(SF::STRINGS);
        //$test_string = Strings::generatePassword();
        $test_string = Strings::generate_password();
        var_dump($test_string);

        load::library(SF::DEBUG);
        //$dd = Debug::get_define_constants();
        //Debug::pr($dd, FALSE);


        // Database - stash queries example
        load::service('DB');

        $prepare = array
        (
            'label' => 'test'
        );

        #$data = DB::select('get.HomeTextByLabel')->prepare($prepare);
        $data = DB::select('get.AllHomeTextData')->execute();
        var_dump($data);

        /*
        DB::query('SELECT * FROM test WHERE data IS NOT NULL AND id > :count AND data != :text', array
        (
            ':id'   => 10,
            ':text' => 'test'
        ))->execute();
        */

        //$this->view('test')->with('sdadsa')->statusCode(255);

        echo '<br/>contact controller works';
    }
}