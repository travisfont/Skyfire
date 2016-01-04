<?php

// find the maximum value for a define bit signed or unsigned integer

function int_max($datatype)
{
    switch ($datatype)
    {
        case 'int8':
            return (int) 127;
        case 'uint8':
            return (int) 255;
        case 'int16':
            return (int) 32767;
        case 'uint16':
            return (int) 65535;
        case 'int32':
            return (int) 8388607;
        case 'uint32':
            return (int) 16777215;
        case 'int64':
            return (int) 9223372036854775807;
        case 'uint64':
            return (int) 18446744073709551615;
        default:
            return (bool) FALSE;
    }
}
