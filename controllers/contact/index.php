<?php

class Contact extends Controller
{
    public function __construct()
    {
        /* ACTIVE DB CONNECTION
        parent::__construct();
        $data = $this->DB->select('get.AllHomeTextData')->execute();
        var_dump($data); exit;
        */

        //load::library(SF::CONSTANTS);
        //var_dump(Days::FRI);

        load::service('HTTP');

        /*
        $request = Request::createFromGlobals();
        echo $request->getPathInfo();
        */

        echo '<br/>######################';
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

        /*
        // row creation
        $test = DB::table('test');
        $test->id   = 11;
        $test->text = 'bla blah';
        $test->create();

        // row updating
        $test = DB::table('test');
        $test->text = 'bla blah';
        $test->update('id = 1');

        // row deletes
        $test = DB::table('test');
        $test->delete('id = 1');

        // soft deletes
        $test = DB::table('test');
        $test->softdelete('id = 1', 'timestamp_field');
        */


        //$this->view('test')->with('sdadsa')->statusCode(255);

        echo '<br/>contact controller works';
    }
}