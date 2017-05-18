<?php

/**
 * return boolean of true if even
 *
 * @param $number
 *
 * @return bool
 */
function is_even($number)
{
    return (bool) (((int) $number) % 2 == 0);
}
