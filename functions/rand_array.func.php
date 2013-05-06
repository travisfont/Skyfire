<?php

function rand_array($array)
{
	shuffle($array);
	return end($array);
}

$images = array('bg2.jpg', 'bg3.jpg', 'bg4.jpg', 'bg5.jpg');

$data = rand_array($images);

print_r($data);
