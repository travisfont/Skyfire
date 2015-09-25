<?php

class Errors extends Controller
{
    public function __construct()
    {
        switch (http_response_code())
        {
            case 404:
                echo '404 page error';
                break;
            default:
                echo 'unknow error...';
        }
    }
}