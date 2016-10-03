<?php

function remove_parent_xml_node(&$xml, $node)
{
    $xml = (string) preg_replace("/<\\/?".$node."(\\s+.*?>|>)/", '', $xml);
}
