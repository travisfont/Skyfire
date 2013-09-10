<?php
//Function to clean the string of tags and html entities
	static function cleanString ($string) {
		//Get rid of tags
		$string = strip_tags($string);

		//Get rid of html entities
		$string = preg_replace("/&#?[a-z0-9]+;/i","",$string);

		//Trim the string
		$string = trim($string);

		return $string;
	}
	
	?>
