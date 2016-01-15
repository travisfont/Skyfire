<?php

// True if the first character in the string is uppercase

function str_starts_uppercase($string)
{
    return (bool) ctype_upper($string[0]);
}
