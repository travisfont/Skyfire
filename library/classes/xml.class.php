<?php

// XML interface and function into object inherence

class XML extends Controller
{
    // xmlToArray
    protected function xml_to_array($xml_object)
    {
        return xml_to_array($xml_object);
    }

    // removeParentNode
    protected function remove_parent_node(&$xml, $node)
    {
        return xml_remove_parent_node($xml, $node);
    }

    // formatXmlString
    protected function format_xml_string($xml)
    {
        return format_xml_string($xml);
    }

    // isXml
    protected function is_xml(&$response)
    {
        return is_xml($response);
    }

    // isRss
    protected function is_rss($feedxml)
    {
        return is_rss($feedxml);
    }

    // isAtom
    protected function is_atom($feedxml)
    {
        return is_atom($feedxml);
    }
}
