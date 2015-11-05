<?php

function darker_hex($hex, $amount = 30)
{
    $new_hex = '';

    if (empty($hex) || empty($amount))
    {
        return FALSE;
    }
    else
    {
        $hex = str_replace('#', '', $hex);

        $base['R'] = hexdec($hex{0}.$hex{1});
        $base['G'] = hexdec($hex{2}.$hex{3});
        $base['B'] = hexdec($hex{4}.$hex{5});

        foreach ($base as $value)
        {
            $new_hex_component = dechex(($value - round(($value / 100) * ($value / 100))));

            if (strlen($new_hex_component) < 2)
            {
                $new_hex_component = '0'.$new_hex_component;
            }

            $new_hex .= $new_hex_component;
        }

        return '#'.$new_hex;
    }
}