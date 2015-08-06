<?php

class DT
{
    const TINYINT  = 'tinyint';
    const UTINYINT = 'utinyint';
    const INT      = 'int';
    const UINT     = 'uint';
    const USHORT   = 'ushort';
    const SMALLINT = 'smallint';
    const LONGINT  = 'longint';
    const STRING   = 'string';
}

// Reference
//https://en.wikipedia.org/wiki/Integer_(computer_science)

class SF extends DT
{
    const GET  = 'GET';
    const POST = 'POST';

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
}