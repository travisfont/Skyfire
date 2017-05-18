<?php

/**
 * find the minimum value for a define bit signed or unsigned integer
 *
 * @param $datatype
 *
 * @return bool|int
 */
function int_min($datatype)
{
    switch ($datatype)
    {
        case 'int8':
            return (int) -128;
        case 'uint8':
            return (int) 0;
        case 'int16':
            return (int) -32768;
        case 'uint16':
            return (int) 0;
        case 'int32':
            return (int) -8388608;
        case 'uint32':
            return (int) 0;
        case 'int64':
            return (int) -9223372036854775808;
        case 'uint64':
            return (int) 0;
        default:
            return (bool) FALSE;
    }
}
