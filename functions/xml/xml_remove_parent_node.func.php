<?php

function xml_remove_parent_node(&$xml, $node)
{
    $xml = preg_replace("/<\\/?".$node."(\\s+.*?>|>)/", '', $xml);
}