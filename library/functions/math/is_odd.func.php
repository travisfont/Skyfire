<?php

/**
 * return boolean of true if odd
 *
 * @param $number
 *
 * @return bool
 */
function is_odd($number)
{
    return (bool) (((int) $number) % 2 != 0);
}
