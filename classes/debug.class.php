<?php

class Debug
{

    static public function pr($data, $exit = TRUE)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        if ($exit) exit;
    }
    
    static public function dd($data, $exit = TRUE) {}
    
}