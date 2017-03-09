<?php

// Object interface and function into object inherence

class Objects extends Controller
{
    protected function convert_objects_to_arrays($obj, &$arr)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'obj' => DT::STD,
                'arr' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($obj, $arr)
            ->returning(DT::STRING);
        }
        else
        {
            return (array) convert_objects_to_arrays($obj, $arr);
        }
    }
}
