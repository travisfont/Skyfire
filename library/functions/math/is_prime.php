<?php

/**
 * Returns true if the number is prime
 *
 * @param $number
 *
 * @return bool
 */
function is_prime($number)
{
    return (bool) !preg_match('/^1?$|^(11+?)\1+$/x', str_repeat('1', $number));
}
