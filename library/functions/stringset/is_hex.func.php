<?php

/**
 * @param $hex
 *
 * @return int
 */
function is_hex($hex)
{
	return preg_match("/^#?([a-f0-9]{6}|[a-f0-9]{3})$/", $hex);
}

# is_hex('#4d82h4');  - false // contains an H that doesn't belong there
# is_hex('#a3c113'); - true
