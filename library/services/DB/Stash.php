<?php

class Stash
{
    public static function getQuery($query_name, $directory)
    {
        $file = PARENT_DIRECTORY.'/queries/'.$directory.'/'.$query_name.'.sql';
        //$file = $_SERVER['DOCUMENT_ROOT'].APP_DIR.'queries/'.$directory.'/'.$query_name.'.sql';

        if (file_exists($file))
        {
            return trim(file_get_contents($file));
        }
        else
        {
            die ($file.' doesn\'t exist.');
        }
    }
}