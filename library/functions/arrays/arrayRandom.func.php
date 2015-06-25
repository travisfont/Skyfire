<?php

// returns random element(s) from array

function arrayRandom($arr, $amount = 1)
{
    shuffle($arr);
    
    $r = array();
    for ($i = 0; $i < $amount; $i++) 
	{
        $r[] = $arr[$i];
    }
	
	return $r;
}
  