<?php

//  removes all tab spaces from string (typically HTML text)

function strip_tabspaces($string)
{
    return (string) str_replace("\t", '', $string);
}
