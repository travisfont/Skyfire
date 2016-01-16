<?php

// splits (seperates) numbers and strings within a string
function split_number_str($string)
{
    return (array) preg_split('/(?<=\d)(?=[a-z])|(?<=[a-z])(?=\d)/i', $string);
}
