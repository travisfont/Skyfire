<?php

abstract class DT
{
    const INT8     = 'int8';  // -128 to 127
    const TINYINT  = 'int8';  // -128 to 127
    const INT16    = 'int16'; // -32,768 to 32,767
    const SMALLINT = 'int16'; // -32,768 to 32,767
    const INT32    = 'int32'; // -8,388,608 to 8,388,607
    const INT      = 'int32'; // -8,388,608 to 8,388,607
    const INT64    = 'int64'; // -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807
    const LONGINT  = 'int64'; // -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807
    const BIGINT   = 'int64'; // -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807

    const UINT8     = 'uint8';  // 0 to 255
    const UTINYINT  = 'uint8';  // 0 to 255
    const UINT16    = 'uint16'; // 0 to 65,535
    const USHORT    = 'uint16'; // 0 to 65,535
    const USMALLINT = 'uint16'; // 0 to 65,535
    const UINT      = 'uint32'; // 0 to 16,777,215
    const UINT32    = 'uint32'; // 0 to 16,777,215
    const UINT64    = 'uint64'; // 0 to 18,446,744,073,709,551,615
    const ULONG     = 'uint64'; // 0 to 18,446,744,073,709,551,615
    const UBIGINT   = 'uint64'; // 0 to 18,446,744,073,709,551,615

    const STRING     = 'string';     // 255
    const TEXT       = 'text';       // 65,535
    const MEDIUMTEXT = 'mediumtext'; // 16,777,215
    const LONGTEXT   = 'longtext';   // 4,294,967,295

    const BOOL   = 'bool';  // true or flase
    const VOID   = 'void';  // no return
    const MIXED  = 'mixed'; // multiple values
    const ANY    = 'any';   // unknown value
    const NUMBER = 'int32'; // unknown number value
    const FLOAT  = 'float'; // unknown decimal value

    const STD = 'object'; // object type

    const TYPE_ARRAY  = 'array'; // array type
    const INT_ARRAY   = 'array'; // array integer
    const FLOAT_ARRAY = 'array'; // array float
    const CHAR_ARRAY  = 'array'; // array character

    const ITERATOR = 'iterator'; // iterator array
    const ENUM     = 'enum';     // enum     object

    const IPV4 = 'ipv4'; // 32 bits (4 bytes)    [count . and convert to int]
    const IPV6 = 'ipv6'; // 128 bits (16 bytes)  [count : and convert to int]
}

// USE MATLAB REFERENCE:
// http://my.math.wsu.edu/help/matlab/int8.html

// Reference
//https://en.wikipedia.org/wiki/Integer_(computer_science)

abstract class SF
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