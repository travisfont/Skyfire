<?php

// if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * This class provides a set of constants representing the days of the week.
 */
class Days
{
    const SUN = 'Sunday';
    const MON = 'Monday';
    const TUE = 'Tuesday';
    const WED = 'Wednesday';
    const THU = 'Thursday';
    const FRI = 'Friday';
    const SAT = 'Saturday';
}

/**
 * This class provides a set of constants representing the months of the year.
 */
class Months
{
    const JAN = 'January';
    const FEB = 'February';
    const MAR = 'March';
    const APR = 'April';
    const MAY = 'May';
    const JUN = 'June';
    const JUL = 'July';
    const AUG = 'August';
    const SEP = 'September';
    const OCT = 'October';
    const NOV = 'November';
    const DEC = 'December';
}

/**
 * This class provides a set of constants representing a servers (in Octal) file modes
 */
class File
{
    const READ_MODE  = 0644;
    const WRITE_MODE = 0666;
}

/**
 * This class provides a set of constants representing a servers (in Octal) directory modes
 */
class Dir
{
    const READ_MODE  = 0755;
    const WRITE_MODE = 0777;
}

/**
 * This class provides a set of constants representing the file stream modes
 * which are used when working with fopen() / popen() functions
 */
class Fopen
{
    const READ                          = 'rb';
    const READ_WRITE                    = 'r+b';
    const WRITE_CREATE_DESTRUCTIVE      = 'wb';
    const READ_WRITE_CREATE_DESTRUCTIVE = 'w+b';
    const WRITE_CREATE                  = 'ab';
    const READ_WRITE_CREATE             = 'a+b';
    const WRITE_CREATE_STRICT           = 'xb';
    const READ_WRITE_CREATE_STRICT      = 'x+b';
}

/**
 * Class RegEx
 *
 * Special regular expression class
 */
class RegEx
{
    const START           = '/';
    const IS_DATE         = '[0-9]{4}-[0-9]{2}-[0-9]{2}';
    const IS_DATE_ATOM    = '^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$';
    const IS_DATE_ISO8601 = '^([\+-]?\d{4}(?!\d{2}\b))((-?)((0[1-9]|1[0-2])(\3([12]\d|0[1-9]|3[01]))?|W([0-4]\d|5[0-2])(-?[1-7])?|(00[1-9]|0[1-9]\d|[12]\d{2}|3([0-5]\d|6[1-6])))([T\s]((([01]\d|2[0-3])((:?)[0-5]\d)?|24\:?00)([\.,]\d+(?!:))?)?(\17[0-5]\d([\.,]\d+)?)?([zZ]|([\+-])([01]\d|2[0-3]):?([0-5]\d)?)?)?)?$';
    const IS_INT          = '[0-9]+';
    const IS_SIGNED_INT   = '-?[0-9]+';
    const IS_SPACE        = '[\s]';
    const END             = '/';
}