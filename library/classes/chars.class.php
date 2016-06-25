<?php

// Character Class (HTML Character Entities)
class Chars
{
    private static function process($key, $arrows)
    {
        if ($key > 0)
        {
            return '&#'.$arrows[$key].';';
        }
        else
        {
            return count($arrows);
        }
    }

    public static function ARROW_LEFT($key = 0)
    {
        return self::process($key, array
        (
            8592,  8598, 8601, 8602, 8604,  8606,  8610,  8612,
            8617,  8619, 8624, 8626, 8629,  8630,  8632,  8634,
            8636,  8637, 8647, 8653, 8656,  8662,  8665,  8666,
            8668,  8672, 8676, 8678, 10092, 10094, 10096, 10550,
            10552, 65513
        ));
    }

    public static function ARROW_RIGHT($key = 0)
    {
        return self::process($key, array
        (
            8594,  8599,  8600,  8603,  8605,  8608,  8611,  8614,
            8618,  8620,  8625,  8627,  8631,  8635,  8640,  8641,
            8649,  8655,  8658,  8663,  8664,  8667,  8669,  8674,
            8677,  8680,  8688,  10093, 10095, 10097, 10136, 10137,
            10138, 10139, 10140, 10141, 10142, 10143, 10144, 10145,
            10146, 10147, 10148, 10149, 10150, 10151, 10152, 10153,
            10154, 10155, 10156, 10157, 10158, 10159, 10161, 10162,
            10163, 10164, 10165, 10166, 10167, 10168, 10169, 10170,
            10171, 10172, 10173, 10174, 10551, 10553, 65515
        ));
    }

    public static function ARROW_UP($key = 0)
    {
        return self::process($key, array
        (
             8593,  8607, 8613, 8638, 8639, 8648, 8657, 8670,
             8673,  8679, 8682, 8683, 8684, 8685, 8686, 8687,
             10548, 65514
        ));
    }

    public static function ARROW_DOWN($key = 0)
    {
        return self::process($key, array
        (
            8595, 8609, 8615, 8623, 8628,  8642, 8643, 8650,
            8659, 8671, 8675, 8681, 10549, 65516
        ));
    }

    public static function ARROW_LEFT_RIGHT($key = 0)
    {
        return self::process($key, array
        (
            8596, 8621, 8622, 8633, 8644,
            8646, 8651, 8652, 8654, 8660
        ));
    }

    public static function ARROW_UP_DOWN($key = 0)
    {
        return self::process($key, array(8597, 8616, 8645, 8661));
    }

    public static function ARROW_MISC($key = 0)
    {
        return self::process($key, array(10160, 10175, 10176));
    }

    const REGISTERED_TRADEMARK = '&reg;';
    const NON_BREAKING_SPACE  = '&nbsp;';
    const LESS_THAN     = '&lt;';
    const GREATER_THAN  = '&gt;';
    const AMPERSAND     = '&amp;';
    const COPYRIGHT = '&copy;';
    const TRADEMARK = '&reg;';
    const CENT  = '&cent;';
    const POUND = '&pound;';
    const YEN   = '&yen;';
    const EURO  = '&euro;';
}

// http://www.htmlhelp.com/reference/html40/entities/special.html
// http://www.thesauruslex.com/typo/eng/enghtml.htm
/* Reference: http://character-code.com/arrows-html-codes.php */
