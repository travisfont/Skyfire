<?php

// Object interface and function into object inherence

class Objects extends Controller
{
    // convertObjectsToArrays
    protected function convert_objects_to_arrays($obj, &$arr)
    {
        return convert_objects_to_arrays($obj, $arr);
    }
}
