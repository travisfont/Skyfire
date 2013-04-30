<?php


define('HOST',			'localhost');
define('USER',			'root');
define('PASSWORD',	NULL);
define('DATABASE', 	'data_table_example1');

function open_connection($query)
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
		write_error($query);
		write_error(mysql_error());
		echo mysql_error() ."\n";
		//exit;
	}
	else
	{
		return $result;
	}
	mysql_close($link);
}

# $array = mysql_fetch_assoc(open_connection("SELECT * FROM table_name LIMIT 1"));