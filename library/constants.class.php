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