<?php

class Entries extends Model
{
    public static function getData()
    {
        //return self::Entries()->DB->select('get.AllHomeTextData')->execute();
        return DB::select('get.AllHomeTextData')->execute();
    }
}
