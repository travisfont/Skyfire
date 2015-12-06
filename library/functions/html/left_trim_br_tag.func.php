<?php

function left_trim_br_tag($string)
{
    return preg_replace('/^(?:<br\s*\/?>\s*)+/', '', $string);
}
