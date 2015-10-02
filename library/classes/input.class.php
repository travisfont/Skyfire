<?php

class Input
{
    // if the field exist
	public static function has($key)
    {
        return trim((string) $_POST[$key]) !== '';
    }
    
    // retrieve all the post elements
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
	
    // retrieve all the post elements
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
    
    // retrieve all the post and get elements
    public static function all()
	{
        return array_merge(static::get(), static::post());
    }
    
    // field validator
    // @$rules - array
    public static function validate($rules)
    {
    
    }
    
    

}

// $data = Input::post();
// $data['value'];

/*
$rules = array
(
    'file_name' => 'required',
    'username ' => 'min:3',
    'username ' => 'string',
    'id'        => 'required',
    'id'        => 'int', // alias: number, numeric
    'desc'      => 'max:255'
);
Input::validate(); // if all the rules are met from the form it will return true, if not then a false.