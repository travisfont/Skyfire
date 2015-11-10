<?php

class Entries extends Model
{

    public static function getData()
    {
        $self = new Static();

        return DB::select('get.AllHomeTextData')->execute();
    }
}