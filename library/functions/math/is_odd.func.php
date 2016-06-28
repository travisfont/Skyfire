<?php

// return boolean of true if odd

function is_odd($number)
{
    return (bool) (((int) $number) % 2 != 0);
}
