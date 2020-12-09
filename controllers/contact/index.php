<?php

class Contact extends Controller
{
    public function __construct($parameters)
    {
        $data = Entries::getData($parameters);

        $this->view('test')
             ->with($data)
             ->statusCode(201);
    }
}
