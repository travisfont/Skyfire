<?php

// Debug interface and function into object inherence

class TimeProfiler
{
    private $value;
    private $microseconds = 0;
    public  $start        = 0;
    public  $end          = 0;
    public  $function;
    public  $miliseconds;

    public function __construct($func, $iterations = 1, $arguments = NULL)
    {
        $this->function     = $func;
        $this->microseconds = 0;
        $this->start        = microtime(TRUE);

        for ($n = 0; $n < $iterations; $n++)
        {
            if ($arguments == NULL)
            {
                $this->value = call_user_func_array($func, array());
            }
            else
            {
                $this->value = call_user_func_array($func, $arguments);
            }
        }

        $this->end          = microtime(TRUE);
        $this->microseconds = $this->end - $this->start;
        $this->miliseconds  = round($this->microseconds * 1000);

        return $this->value;
    }

    public function funcOutput()
    {
        return $this->value;
    }

    public function getMicro()
    {
        return $this->function.": ".sprintf('%f', $this->microseconds);
    }

    public function getMili()
    {
        return $this->miliseconds;
    }
}

/* Usage:

function imprime()
{
    sha1(md5("Hello"));
}

function blah($n=1)
{
    for($i = 0; $i<= $n; $i++){
        $a = $i;
    }
}

function getContent($url)
{
    return file_get_contents($url);
}

$timer = new TimeProfiler("blah", 500, array(100));
echo "".$timer->getMicro()."'s (".$timer->getMili()." ms)";

echo "<br/>";

$timer = new TimeProfiler("imprime");
echo $timer->getMicro()."'s (".$timer->getMili()." ms)";

$timer = new TimeProfiler("getContent",1,array('http://google.com/testfile.txt'));
echo $timer->getMicro()." 's (".$timer->getMili()." ms)<br />";
var_dump($timer->funcOutput());
*/

class ExecuteTime
{
     public static $display;
    private static $start_time;

    public static function start()
    {
        $mtime = microtime();
        $mtime = explode(" ", $mtime);
        static::$start_time = ($mtime[1] + $mtime[0]);
    }

    public static function end()
    {
        $mtime = microtime();
        $mtime = explode(" ", $mtime);
        $end = $mtime[1] + $mtime[0];

        static::$display = number_format(round(($end - static::$start_time), 18), 18);
    }

    public static function display()
    {
        return static::$display;
    }
}

/*  Usage:
ExecuteTime::start(); // starts the timer

function ts()
{
    return 'test';
}

$ts = ts();
echo $ts;

ExecuteTime::end(); // ends the timer

// displaying time results
echo "This page was created in ".ExecuteTime::$display." seconds";
*/


class Debug extends Controller
{
    protected function ddf($data, $name, $display = FALSE, $file_type = 'txt')
    {
        //return ddf($data, $name, $display, $file_type);
        return self::parameters(
            [
                'data'      => DT::ANY,
                'name'      => DT::STRING,
                'display'   => DT::BOOL,
                'file_type' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($data, $name, $display, $file_type)
            ->returning(DT::VOID);
    }

    protected function get_define_constants($type = 'user')
    {
        //return (array) get_define_constants($type);
        return (array) self::parameters(
        [
            'type' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($type)
        ->returning(DT::TYPE_ARRAY);
    }

    protected function get_user_defined_constants()
    {
        //return (array) get_user_defined_constants();
        return (array) self::parameters()->call(__FUNCTION__)
                                         ->returning(DT::TYPE_ARRAY);
    }

    protected function has_locale($locale)
    {
        //return (bool) has_locale($locale);
        return (bool) self::parameters(
        [
            'locale' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($locale)
        ->returning(DT::BOOL);
    }

    protected function pr($data, $exit = TRUE)
    {
        //return pr($data, $exit);
        return self::parameters(
        [
            'data' => DT::ANY,
            'exit' => DT::BOOL
        ])
        ->call(__FUNCTION__)
        ->with($data, $exit)
        ->returning(DT::VOID);
    }

    /**
     * Get human-readable info about the type of the value.
     *
     * @param  mixed $value The value to get the info for.
     *
     * @return string The info about the value as string.
     */
    protected function var_info($value)
    {
        //return (string) var_info($value);
        return (string) self::parameters(
        [
            'value' => DT::ANY
        ])
        ->call(__FUNCTION__)
        ->with($value)
        ->returning(DT::STRING);
    }
}
