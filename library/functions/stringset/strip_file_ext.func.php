<?php

/**
 * @param $filename
 *
 * @return mixed
 */
function strip_file_ext($filename)
{
    return preg_replace('/\.[^.]*$/', '', $filename);
}
