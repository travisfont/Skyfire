<?php

class Contact
{
    public function index()
    {
        load::library('constants');

        var_dump(Days::FRI);

        var_dump(time::getUTCTimeZone());

        echo 'contact controller works';
    }
}