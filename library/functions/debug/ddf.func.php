<?php

function ddf($data, $name, $display = FALSE, $file_type = 'txt')
{
    $additional = '1';
    $fullpath   = '_ddf/'.$name.'.'.$additional.'.'.$file_type;

    while (file_exists($fullpath))
    {
        $info     = pathinfo($fullpath);
        $fullpath = $info['dirname'].
                    '/'.
                    preg_replace('/\.[^.]*$/', '', $info['filename']).
                    '.'.
                    $additional++.
                    '.'.
                    $info['extension'];
    }

    if ($display)
    {
        print_r($data);
    }

    file_put_contents($fullpath, print_r($data, TRUE)); exit;
}

// example
/*
$lineData = array(...);
ddf($lineData, 'lineData');
ddf($lineData, 'lineData', TRUE); // will display the array data
*/
