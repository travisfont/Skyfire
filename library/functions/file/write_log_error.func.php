<?php

/**
 * @param $text
 *
 * @param $log_file
 */
function write_log_error($text, $log_file)
{
	$fh = fopen($log_file, 'a');
	      fwrite($fh, $text ."\n");
	      fclose($fh);
}

# write_error('Loging error from Database insert 101', 'DataBase.log')
