<?php

function date_yesterday($str)
{
	return date($str, time() - 60 * 60 * 24);
}

# date_yesterday("m/d/Y");
