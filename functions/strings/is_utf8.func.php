<?php 

function is_utf8($str)
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