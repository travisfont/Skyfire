<?php

function get_page_title($url)
{
	$str = file_get_contents($url);
	if (strlen($str) > 0)
	{
		preg_match("/\<title\>(.*)\<\/title\>/i", $str, $title);

		return $title[1];
	}
	else
	{
		return FALSE;
	}
}

// example:
#echo getTitle("http://www.ggogle.com");
