<?php

function is_valid_ip($address)
{
	return (bool) preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $address);
}

# is_valid_ip('73.60.124.136') - false
# is_valid_ip('256.60.124.136') - true
