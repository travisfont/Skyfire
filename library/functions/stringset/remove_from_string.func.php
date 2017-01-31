<?php

function remove_from_string($search, $string)
{
    return (string) str_replace($search, '', $string);
}
