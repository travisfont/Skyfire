<?php
 
function percentage_saved($original_price, $current_price)
{
	$saved = ceil(100-(($current_price / $original_price) * 100));
	$saved = ($saved <= 0) ? '<1' : $saved;
	return $saved . "%";
}