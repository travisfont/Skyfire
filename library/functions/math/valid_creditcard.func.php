<?php

function valid_creditcard($cc, $extra_check = FALSE)
{
    $cards = array
	(
        'visa'       => "(4\d{12}(?:\d{3})?)",
        'amex'       => "(3[47]\d{13})",
        'jcb'        => "(35[2-8][89]\d\d\d{10})",
        'maestro'    => "((?:5020|5038|6304|6579|6761)\d{12}(?:\d\d)?)",
        'solo'       => "((?:6334|6767)\d{12}(?:\d\d)?\d?)",
        'mastercard' => "(5[1-5]\d{14})",
        'switch'     => "(?:(?:(?:4903|4905|4911|4936|6333|6759)\d{12})|(?:(?:564182|633110)\d{10})(\d\d)?\d?)",
    );

    $names   = array('Visa', 'American Express', 'JCB', 'Maestro', 'Solo', 'Mastercard', 'Switch');
    $matches = array();
    $pattern = "#^(?:".implode("|", $cards).")$#";
    $result  = preg_match($pattern, str_replace(' ', '', $cc), $matches);

    if ($extra_check && $result > 0)
	{
        $result = (validatecard($cc)) ? 1 : 0;
    }
	
    return ($result > 0) ? $names[sizeof($matches)-2] : FALSE;
}

# example
echo valid_creditcard('4111 1111 1111 1111', TRUE); // visa
