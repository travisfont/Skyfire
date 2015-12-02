<?php

class Contact extends Controller
{
    public function __construct($parameters)
    {
        $this->view('test')->with($parameters)->statusCode(255);

        echo '<br/>contact controller works';
    }
}
