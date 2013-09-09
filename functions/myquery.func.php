<?php


define('HOST',		'localhost');
define('USER',		'root');
define('PASSWORD',	NULL);
define('DATABASE', 	'data_table_example1');

function myquery($query, $write_error = FALSE)
{
	if(!$link = mysql_connect(HOST, USER, PASSWORD))
	{
		die('error - connection credentials incorrect: ' . mysql_error());
	}
	if(!$db = mysql_select_db(DATABASE))
	{
		die("error - db unavailable.");
	}
	$result = mysql_query($query);
	if(mysql_error())
	{
		if($write_error === TRUE)
		{
			write_error($query);
			write_error(mysql_error());
		}
		echo mysql_error() ."\n";
		return FALSE;
	}
	else
	{
		if(strpos($query, 'SELECT') !== FALSE)
		{
			$output = array();
			while($row = mysql_fetch_assoc($result))
			{
				$output[] = $row;
			}
	
			mysql_close($link);
			return $output;
		}
		else
		{
			mysql_close($link);
			return $result;
		}
	}
}

# $array = myquery("SELECT * FROM table_name LIMIT 1");
