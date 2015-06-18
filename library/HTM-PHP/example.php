<?php

require_once 'JavaScript.class.php';
require_once 'HTM.class.php';

// ------

$attributes = array
(
	'href'		=> 'http://localhost',
	'onclick'	=> "window.open(this.href,'_blank'); return false"
);

$link1 = HTM::a('Localhost New Tab', $attributes);

echo $link1;
echo HTM::br(2);


$array = array
(
	'href'		=> '#',
	'onclick'	=> JavaScript::alert('test')
);

$alert_link = HTM::a('Alert Link Text', $array);

/* div HTML */

$attr['id']	= 'div1';
$attr['class']	= 'recaptcha_only_if_incorrect_sol';
$attr['style']	= 'color:red;';

echo "\r\n";
echo HTM::div(HTM::span('Link: ', array('style' => 'font-weight:bold;')).$alert_link, $attr);


// TODO: input
