<?php
function crypto_rand($min, $max)
{
    $range = $max - $min;
    if ($range == 0)
    {
        return $min;
    }
    
    $log    = log($range, 2);
    $bytes  = (int) ($log / 8) + 1; // length in bytes
    $bits   = (int) $log + 1; // length in bits
    $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
    
    do
    {
        $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes, $s)));
        $rnd = $rnd & $filter; // discard irrelevant bits
    }
    while ($rnd >= $range);

    return $min + $rnd;
}

// Example - randomizes a 5 digital number
#var_dump(crypto_rand(10000, 99999));
?>