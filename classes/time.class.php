<?php 

class time
{
    public static function getUTCTimeZone()
    {
        $UTCDateTimeZone = new DateTimeZone('UTC');
                    return new DateTime("now", $UTCDateTimeZone);
    }

    public static function serverTimeZone_offset($userTimeZone = 'UTC')
    {
        $userDateTimeZone = new DateTimeZone($userTimeZone);
        $userDateTime     = new DateTime("now", $userDateTimeZone);

        $serverTimeZone     = date_default_timezone_get();
        $serverDateTimeZone = new DateTimeZone($serverTimeZone);
        $serverDateTime     = new DateTime("now", $serverDateTimeZone);

        return $serverDateTimeZone->getOffset($userDateTime) - $userDateTimeZone->getOffset($userDateTime);
    }

    public static function getDefineTimeZone($timezone)
    {
        $userDateTimeZone = new DateTimeZone($timezone);
                     return new DateTime("now", $userDateTimeZone);
    }

    public static function getServerTimeZone()
    {
        $serverTimeZone     = date_default_timezone_get();
        $serverDateTimeZone = new DateTimeZone($serverTimeZone);
        
        return new DateTime("now", $serverDateTimeZone);
    }
}

$userDateTime   = time::getDefineTimeZone('America/Curacao');
$serverDateTime = time::ggetServerTimeZone();
$timeOffset     = time::gserverTimeZone_offset('America/Curacao');

var_dump($userDateTime);
var_dump($serverDateTime);
var_dump($timeOffset);

$userDateTime->add(new DateInterval('PT'.$timeOffset.'S'));

var_dump($userDateTime);