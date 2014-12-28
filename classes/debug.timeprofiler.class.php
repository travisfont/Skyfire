<?php 
/*------------------------------------------------------------------------------ 
** File:            class.timeprofiler.php 
** Class:           Time Profiler 
** Description:      
** Version:         1.0.1 
** Created:         11-Jul-2014 
** Author:          Tony L. Requena 
** Homepage:        www.phpmyipcam.com  
**------------------------------------------------------------------------------ 
** COPYRIGHT (c) 2014 Tony L. Requena 
** 
** The source code included in this package is free software; you can 
** redistribute it and/or modify it under the terms of the GNU General Public 
** License as published by the Free Software Foundation. This license can be 
** read at: 
** 
** http://www.opensource.org/licenses/gpl-license.php 
** 
** This program is distributed in the hope that it will be useful, but WITHOUT  
** ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS  
** FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.  
**------------------------------------------------------------------------------ 
** 
** Usage: 
**  
    function imprime(){ 
        sha1(md5("Hello")); 
    } 
     
     
    function blah($n=1){ 
        for($i = 0; $i<= $n; $i++){ 
            $a = $i; 
        } 
    } 
     
    function getContent($url){ 
        return file_get_contents($url); 
    } 

    $timer = new TimeProfiler("blah", 500, array(100)); 
    echo "".$timer->getMicro()." µs (".$timer->getMili()." ms)"; 
     
    echo "<br />"; 
     
    $timer = new TimeProfiler("imprime"); 
    echo $timer->getMicro()." µs (".$timer->getMili()." ms)"; 

    $timer = new TimeProfiler("getContent",1,array('http://server.sivu.es/testfile.txt')); 
    echo $timer->getMicro()." µs (".$timer->getMili()." ms)<br />"; 
    var_dump($timer->funcOutput()); /*** NEW  NEW NEW **/ 
** 
**------------------------------------------------------------------------------ */ 

class TimeProfiler{  
    private $microseconds = 0;  
    public $start = 0;  
    public $function;  
    public $end = 0;  
    public $miliseconds;  
    function __construct($func, $iterations=1, $arguments = NULL){  
        $this->function = $func;  
        $this->microseconds = 0;  
        $this->start = microtime(true);  
          
        for($n=0;$n<$iterations;$n++){  
            if($arguments==NULL){  
                $this->val = call_user_func_array($func,array());  
            }else{  
                $this->val = call_user_func_array($func, $arguments);  
            }  
        }  
        $this->end = microtime(true);  
        $this->microseconds = $this->end - $this->start;  
        $this->miliseconds = round($this->microseconds * 1000); 
         
        return $this->val;  
      
    } 
    function funcOutput(){ 
        return $this->val; 
    } 
    function getMicro(){  
        return $this->function.": ".sprintf('%f', $this->microseconds);  
    }  
    function getMili(){  
        return $this->miliseconds;  
    }  
} 
?>