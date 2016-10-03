<?php

// XML interface and function into object inherence

class XML extends Controller
{
    protected function format_xml_string($xml)
    {
        //return format_xml_string($xml);
        return (string) self::parameters(
        [
            'xml' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($xml)
        ->returning(DT::TEXT);
    }

    protected function is_atom($feedxml)
    {
        //return is_atom($feedxml);
        return (string) self::parameters(
        [
            'feedxml' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($feedxml)
        ->returning(DT::TEXT);
    }

    protected function is_rss($feedxml)
    {
        //return is_rss($feedxml);
        return (string) self::parameters(
        [
            'feedxml' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($feedxml)
        ->returning(DT::TEXT);
    }

    protected function is_xml(&$response)
    {
        //return is_xml($response);
        return (string) self::parameters(
        [
            'response' => DT::TEXT
        ])
        ->call(__FUNCTION__)
        ->with($response)
        ->returning(DT::TEXT);
    }

    protected function remove_parent_xml_node(&$xml, $node)
    {
        //return remove_parent_xml_node($xml, $node);
        return self::parameters(
        [
            'xml'  => DT::TEXT,
            'node' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($xml, $node)
        ->returning(DT::VOID);
    }

    protected function xml_to_array($xml_object)
    {
        //return xml_to_array($xml_object);
        return (array) self::parameters(
        [
            'xml_object' => DT::TYPE_ARRAY
        ])
        ->call(__FUNCTION__)
        ->with($xml_object)
        ->returning(DT::TYPE_ARRAY);
    }
}
