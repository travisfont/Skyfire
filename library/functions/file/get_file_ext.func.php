<?php

function get_file_ext($filename)
{
    if (!preg_match('/\./', $filename))
    {
        return FALSE;
    }

    return preg_replace('/^.*\./', '', $filename);
}
