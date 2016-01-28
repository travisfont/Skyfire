<?php

// Randomize a value from an array.
// THe return can be either a string for a single array or another array from a multiple dimensional array.

function randomize_array_element(array $array)
{
	shuffle($array);

	return end($array);
}


/*
$images = array('bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg');

$data = randomize_array_element($images);

print_r($data);
*/
