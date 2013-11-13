<?php

// returns random element(s) from array

function array_random($arr, $num = 1)
{
    shuffle($arr);
    
    $r = array();
    for ($i = 0; $i < $num; $i++) 
	{
        $r[] = $arr[$i];
    }
  