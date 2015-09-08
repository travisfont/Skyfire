<?php

class DT
{
    const INT8     = 'int8';
    const TINYINT  = 'int8';
    const INT16    = 'int16';
    const SMALLINT = 'int16';
    const INT32    = 'int32';
    const INT      = 'int32';
    const INT64    = 'int64';
    const LONGINT  = 'int64';
    const BIGINT   = 'int64';

    const UINT8    = 'uint8';
    const UTINYINT = 'uint8';
    const UINT16   = 'uint16';
    const UINT32   = 'uint32';
    const UINT64   = 'uint64';

    // const USHORT   = 'ushort';
    const STRING   = 'string';
}

// USE MATLAB REFERENCE:
// http://my.math.wsu.edu/help/matlab/int8.html

// Reference
//https://en.wikipedia.org/wiki/Integer_(computer_science)

class SF extends DT
{
    const GET    = 'GET';
    const POST   = 'POST';
    const PUT    = 'PUT';
    const DELETE = 'DELETE';

    const DEBUG     = 'debug';
    const SYSLOG    = 'syslog';
    const CONSTANTS = 'constants';
    const MATH      = 'math';
    const STRINGS   = 'strings';
    const ARRAYS    = 'arrays';
    const CSV       = 'csv';
    const FILE      = 'file';
    const OBJECTS   = 'objects';
    const DATES     = 'dates';
    const CURL      = 'curl';
    const TIME      = 'time';
    const XML       = 'xml';
    const DB        = 'db';
}