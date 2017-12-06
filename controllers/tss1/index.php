<?php

class Tss1 extends Controller
{
    /**
     * Tss1 constructor
     *
     * @func   void
     *
     * @return void
     */
    public function __construct()
    {

        echo 'tss1 controller works<br/>';

        /*
        load::service('validator');

        $rules = array
        (
            'name' => 'alpha|required',
            'year' => 'num|required',
        );

        $Validation = new Validator();
        $Validation->validate($_POST, $rules);

        if (!$Validation->passed())
        {
            $Validation->goBackWithErrors();
        }

        if (!empty($Validation->getErrors()))
        {
            print_r($Validation->getErrors());
        }
        */

        echo 'here i am';

        load::library(SF::STRINGSET);
        load::library(SF::NETWORK);
        
        #$test_string = StringSet::generate_password(4);
        $test_string = StringSet::generatePassword(4);
        var_dump($test_string);


        #$numeric_test = (int) '-abc12.3edf'; // this SHOULD FALL AND THROW AN ERROR
        $numeric_test = '-abc12.3edf'; // this SHOULD FALL AND THROW AN ERROR
        #var_dump(Strings::strip_to_numeric($numeric_test));
        var_dump(StringSet::StripToNumeric($numeric_test));


        #var_dump(Network::get_client_lang());
        var_dump(Network::getClientLang());


        load::library(SF::DEBUG)->func('pr'); // will only load clean_str()

        // database testing
        $data = Entries::getData();
        pr($data);

        //Network::redirectSubdomain('.www');

        /*
        load::library(SF::DEBUG);

        // testing;
        ExecuteTime::start();
        $parameters = array
        (
            'key'      => '1e46165dsa5ds4a',
            'action'   => 'push',
            'userid'   => 1234998,
            'keywords' => 'test'
        );
        ExecuteTime::end();

        echo ExecuteTime::display();
        */
    }
}

