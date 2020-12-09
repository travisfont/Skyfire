<?php

/**
 * Model Class - Entries
 */
class Entries extends Model
{
    public static function getData()
    {
        /*
        $dd = new self;
        $dd->DB->select('get.AllHomeTextData')->execute();
        */

        /*
        load::service('DB');
        DB::select('get.tableinfo')->execute();
        */

        return (object) [
            'id'   => 1,
            'test' => 'text',
            'data' => NULL
        ];
    }
}
