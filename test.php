<?php

class TFont
{

	public static function a($array)
	{
		switch($array)
		{
			case 'href':
				return 'href=';
			case 'onclick':
				return 'onclick';
		}
	}
	
	public static function window()
	{
		
	}

}

// make this work
#<a href="http://www.facebook.com" onclick="window.open(this.href,'_blank'); return false;">Facebook</a>


/*
$array = array(
			'onclick'	=> JavaScript::alert('test');
			'href'		=> 'http://www.facebook.com';
			);

TFont::href('Facebook.com', $array);
*/