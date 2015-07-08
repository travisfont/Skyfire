<?php

class Tss1 extends Controller
{
    public function index()
    {
        echo 'tss1 controller works';

        $parameters = array
        (
            'key'      => '1e46165dsa5ds4a',
            'action'   => 'push',
            'userid'   => 1234998,
            'keywords' => 'test'
        );
        /*
        Response::api('google')->with($parameters);
        Response::view('contact')->with($parameters);
        Response::json()->with($parameters);
        Response::xml()->with($parameters);
        */
    }
}