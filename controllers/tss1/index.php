<?php

class Tss1 extends Controller
{
    /**
     * @func   void
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

        load::library(SF::STRINGS);
        load::library(SF::NETWORK);

        #$test_string = Strings::generate_password(4);
        $test_string = SF_String::generatePassword(4);
        var_dump($test_string);

        $numeric_test = (int) '-abc12.3edf'; // this SHOULD FALL AND THROW AN ERROR
        #var_dump(Strings::strip_to_numeric($numeric_test));
        var_dump(SF_String::StripToNumeric($numeric_test));

        #var_dump(Network::get_client_lang());
        var_dump(SF_Network::getClientLang());

        exit;

        // database testing
        $data = Entries::getData();
        var_dump($data);
        /*
        load::library(SF::DEBUG);
        //load::library(SF::DEBUG)->func('pr'); // will only load clean_str()

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
