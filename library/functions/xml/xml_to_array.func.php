<?php

/**
 * as a string
 *
 * @param $xml_object
 *
 * @return array
 */
function xml_to_array($xml_object)
{
    $out = array();

    foreach ((array) $xml_object as $index => $node)
    {
        $out[$index] = (is_object($node)) ? xml_to_array($node) : $node;
    }

    return (array) $out;
}
