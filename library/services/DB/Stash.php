<?php

class Stash
{
    public static $stash_dir;

    public static function getQuery($query_name, $directory)
    {
        if (isset(self::$stash_dir))
        {
            $file = self::$stash_dir.'/queries/'.$directory.'/'.$query_name.'.sql';

            if (file_exists($file))
            {
                return trim(file_get_contents($file));
            }
            else
            {
                throw new Exception($file.' doesn\'t exist.');
            }
        }
        else
        {
            throw new Exception('DB::define(\'stash_dir\', \'\') is not defined. Stash Query folder cannot be located.');
        }

    }
}
