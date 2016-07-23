<?php

// XML interface and function into object inherence

class XML extends Controller
{
    protected function xmlToArray($xml_object)
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

    protected function removeParentNode(&$xml, $node)
    {
        //return xml_remove_parent_node($xml, $node);
        return self::parameters(
        [
            'xml'  => DT::TEXT,
            'node' => DT::STRING
        ])
        ->call(__FUNCTION__)
        ->with($xml, $node)
        ->returning(DT::VOID);
    }

    protected function formatXmlString($xml)
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

    protected function isXml(&$response)
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

    protected function isRss($feedxml)
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

    protected function isAtom($feedxml)
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
}
