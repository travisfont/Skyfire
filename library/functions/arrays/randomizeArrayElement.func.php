<?php

function randomizeArrayElement($array)
{
	shuffle($array);
	return end($array);
}


/*
$images = array('bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg');

$data = randomizeArrayElement($images);

print_r($data);
*/