<?php

class Input
{

	public static function post()
	{
		if($_POST)
		{
			$input = array();
			foreach($_POST as $key => $string)
			{
				$input[strip_tags($key)] = strip_tags($string);
			}
			return $input;
		}
		else
		{
			return FALSE;
		}
	}
	
	public static function get()
	{
		if($_GET)
		{
			$input = array();
			foreach($_GET as $key => $string)
			{
				$input[strip_tags($key)] = strip_tags($string);
			}
			return $input;
		}
		else
		{
			return FALSE;
		}
	}

}

// $data = Input::post();
// $data['value'];