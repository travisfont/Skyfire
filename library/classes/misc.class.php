<?php

// Misc interface and function into object inherence

class Misc extends Controller
{
    // colorAabbr
    protected function color_abbr($abbr)
    {
        return color_abbr($abbr);
    }

    // getUserDefinedConstants
    protected function get_user_defined_constants()
    {
        return get_user_defined_constants();
    }

    // getClientLang
    protected function get_client_lang()
    {
        return get_client_lang();
    }
}
