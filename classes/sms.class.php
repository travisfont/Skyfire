<?php

SMS::send('simple-sms::welcome', $data, function() {
    $sms->to();
    
    
class SMS
{
    public static $error = FALSE;
    public static function send($msg, $number, $provider)
    {
        // sendmail
        if(FALSE)
        {
            self::$error = array($number => 'Error msg here');
        }
    }
    
}

// example 
$msg = 'test message! hello :D';

if (SMS::send($msg, '+15555555555', 'att'))
{
    echo 'Test message successfully sent.';
}
else
{
    var_dump(SMS::error)
}