<?php


// because i hate create left / right div table from scratch

function create_div_table($html, $width, $style = FALSE)
{
	if ($style)
	{
        $style = 'style="'.$style.'"';
	}
	else
	{
        $style = 'style="margin:0; padding:0;"';
	}

	$string  = '<div '.$style.'><div style="width:'.$width[0].'; float:left;">';
	$string .= $html[0];
	$string .= '</div><div style="width:'.$width[1].'; float:left; text-align:right;">';
	$string .= $html[1];
	$string .= '</div></div>';

	return $string;
}

/*
$html[0] = 'left';
$html[1] = 'right';

create_div_table($html, array('50%', '50%'));
*/