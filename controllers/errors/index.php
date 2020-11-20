<?php

class HTTPStatus
{
    public const INTERNAL_SERVER_ERROR = NULL;
    public const NO_RESPONSE           = NULL;
    public const OK                    = NULL;
    public const INFORMATIONAL = ''; // The responseCode is 1xx
    public const SUCCESSFUL    = ''; // The responseCode is 2xx
    public const REDIRECTION   = ''; // The responseCode is 3xx
    public const CLIENT_ERROR  = ''; // The responseCode is 4xx
    public const SERVER_ERROR  = ''; // The responseCode is 5xx
}


// TODO: this class should be added to the coresystem.
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