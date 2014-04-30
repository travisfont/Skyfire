<?php

// add to "debug" function list (create)

function ddf($data, $name, $file_type = 'txt')
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

    file_put_contents($fullpath, print_r($data, TRUE)); exit;
}

// example

$lineData = array(...);
ddf($lineData, 'lineData');