<?php

function decamelize($string)
{
    return trim(strtolower(preg_replace('/[A-Z]/', '_$0', $string)), '_');
}
