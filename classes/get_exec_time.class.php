<?php

class get_exec_time
{
    protected static $start;
    public static $display;

    public static function start()
    {
        $mtime = microtime(); 
        $mtime = explode(" ", $mtime); 
        static::$start = ($mtime[1] + $mtime[0]); 
    }

    public static function end()
    {
        $mtime = microtime(); 
        $mtime = explode(" ", $mtime); 
        $end = $mtime[1] + $mtime[0];  
        
        static::$display = number_format(round(($end - static::$start), 18), 18);
    }
}

// ---

get_exec_time::start(); // starts the timer

function ts()
{
    return 'test';
}

$ts = ts();
echo $ts;

get_exec_time::end(); // ends the timer

// displaying time results
echo "This page was created in ".get_exec_time::$display." seconds"; 

?>