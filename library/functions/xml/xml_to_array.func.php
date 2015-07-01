<?php

// alias function
function xml2array($xml_object)
{
    return xml_to_array($xml_object);
}

// as a string
function xml_to_array($xml_object)
{
    $out = array();
    foreach ((array) $xml_object as $index => $node)
    {
        $out[$index] = (is_object($node)) ? xml_to_array($node) : $node;
    }
    return $out;
) 