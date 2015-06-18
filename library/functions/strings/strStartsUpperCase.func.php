<?php

// True if the first character in the string is uppercase

function strStartsUpperCase($string)
{
    return ctype_upper($string[0]);
}