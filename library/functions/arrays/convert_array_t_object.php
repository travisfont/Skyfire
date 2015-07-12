<?php 

function convert_array_t_object(array $array)
{
    return json_decode(json_encode($array), FALSE);
}