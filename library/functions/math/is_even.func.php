<?php

// return boolean of true if even

function is_even($number)
{
    return (bool) (((int) $number) % 2 == 0);
}
