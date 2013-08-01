<?php

get_raw_facebook_avatar_url($uid)
{
	$array = get_headers('https://graph.facebook.com/'.$uid.'/picture?type=large', 1);
	return (isset($array['Location']) ? $array['Location'] : FALSE);
}

?>