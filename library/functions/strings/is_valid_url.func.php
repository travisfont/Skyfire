<?php

function is_valid_url($url)
{
	return preg_match("(?:https?:\/\/)?(?:[\w]+\.)([a-zA-Z\.]{2,6})([\/\w\.-]*)*\/?", $url);
}

# is_valid_url('http://google.com/file!.html');  - false
# is_valid_url('http://google.com/about'); - true
