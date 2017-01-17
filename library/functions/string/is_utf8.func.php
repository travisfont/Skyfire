<?php


function is_utf8($string)
{
    return preg_match('%^(?:
	[\x09\x0A\x0D\x20-\x7E]            # ASCII
	| [\xC2-\xDF][\x80-\xBF]             # non-overlong 2-byte
	|  \xE0[\xA0-\xBF][\x80-\xBF]        # excluding overlongs
	| [\xE1-\xEC\xEE\xEF][\x80-\xBF]{2}  # straight 3-byte
	|  \xED[\x80-\x9F][\x80-\xBF]        # excluding surrogates
	|  \xF0[\x90-\xBF][\x80-\xBF]{2}     # planes 1-3
	| [\xF1-\xF3][\x80-\xBF]{3}          # planes 4-15
	|  \xF4[\x80-\x8F][\x80-\xBF]{2}     # plane 16
	)*$%xs', $string);
}


/*
 * function is_utf8($str)
{
        $length = strlen($str);
        for ($i = 0; $i < $length; $i++)
        {
            $c = ord($str[$i]);

            if ($c < 0x80) $n = 0; # 0bbbbbbb
            elseif (($c & 0xE0) == 0xC0) $n = 1; # 110bbbbb
            elseif (($c & 0xF0) == 0xE0) $n = 2; # 1110bbbb
            elseif (($c & 0xF8) == 0xF0) $n = 3; # 11110bbb
            elseif (($c & 0xFC) == 0xF8) $n = 4; # 111110bb
            elseif (($c & 0xFE) == 0xFC) $n = 5; # 1111110b
            else return FALSE; # Does not match any model

            # n bytes matching 10bbbbbb follow ?
            for ($j = 0; $j < $n; $j++)
            {
                    if ((++$i == $length) || ((ord($str[$i]) & 0xC0) != 0x80))
                    {
                        return FALSE;
                    }
            }
        }

    return TRUE;
}
*/
