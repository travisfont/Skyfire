<?php

class Contact extends Controller
{
    public function __construct($parameters)
    {
        #$this->view('test');
        #$this->view('test')->with($parameters);
        $this->view('test')->with($parameters)->statusCode(201);

        echo '<br/>contact controller works';
    }
}
