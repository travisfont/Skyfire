<?php 

function convertArrayToObject(array $array)
{
    return json_decode(json_encode($array), FALSE);
}