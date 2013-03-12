<?php

class abc123
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