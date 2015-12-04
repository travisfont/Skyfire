<?php

class Tss1 extends Controller
{
    /**
     * @func   void
     * @return void
     */
    public function __construct()
    {
        echo 'tss1 controller works';

        load::library(SF::DEBUG);

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


    }
}