<?php

class SysLog
{
    /* Declare the time zone */
    protected static $time_zone   = 'Europe/Paris'; // TODO: timezone auto detector
    protected static $time_format = 'd-m-Y|H:i:s';

    /* Our main simple PHP error logging script method */
    protected static function log($type, $message)
    {
        $current_date = self::get_current_date();
        $fileName    = self::generate_file_name();
        $file        = '/logs/'.$fileName; // TODO: directory checker here (else create directory)

        /* Write the content to the log file */
        self::writeFile($file, $type, $current_date, $message);
    }

    /* Getting the current date for our time zone */
    protected static function get_current_date()
    {
        // Set the time zone
        date_default_timezone_set(self::$time_zone);

        // Formatting the date
        $current_date = date(self::$time_format);

        return $current_date;
    }

    /* Generating a file name based on the currentdate */
    protected static function generate_file_name()
    {
        date_default_timezone_set(self::$time_zone);

        // Create the file name
        $new_file_name = date('d-m-Y').'.log';

        return $new_file_name;
    }

    /* Writing the content to the file - the core of our simple PHP error logging script */
    protected static function writeFile($file, $type, $current_date, $message)
    {
        $log_message = '';

        /* Check the log type and write it to the file */
        if ($type == 'info')
        {
            $log_message = "[INFO] $current_date: $message\n";
        }

        if ($type == 'error')
        {
            $log_message = "[ERROR] $current_date: $message\n";
        }

        file_put_contents($file, $log_message, FILE_APPEND | LOCK_EX);
    }

    public static function info($message)
    {
        self::log('info', $message);
    }

    public static function notice($message)
    {
        self::log('notice', $message);
    }

    public static function error($message)
    {
        self::log('error', $message);
    }
}
