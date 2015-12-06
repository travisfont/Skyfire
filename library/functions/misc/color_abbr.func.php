<?php

//abbreviations and acronym

function color_abbr($abbr)
{
	switch (strtoupper($abbr))
	{
		case 'BRO': return 'BROWN';
		case 'BLK': return 'BLACK';
		case 'GRY': return 'GREY';
		case 'GRN': return 'GREEN';
		case 'HAZ': return 'HAZEL';
		case 'BLU': return 'BLUE';
		default: return $abbr;
	}
}

/*
Reference:
http://www.all-acronyms.com/tag/color/2
http://www.abbreviations.com/acronyms/COLORS
http://www.ul.com/global/eng/pages/offerings/industries/chemicals/plastics/abbreviations/
*/
