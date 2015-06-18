<?php

function rand_array_element($array)
{
	shuffle($array);
	return end($array);
}

$images = array('bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg');

$data = rand_array_element($images);

print_r($data);
