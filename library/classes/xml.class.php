<?php

// XML interface and function into object inherence

class XML extends Controller
{
    protected function format_xml_string($xml)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (string) self::parameters(
            [
                'xml' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($xml)
            ->returning(DT::TEXT);
        }
        else
        {
            return (string) format_xml_string($xml);
        }
    }

    protected function is_atom($feedxml)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'feedxml' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($feedxml)
            ->returning(DT::TEXT);
        }
        else
        {
            return (bool) is_atom($feedxml);
        }
    }

    protected function is_rss($feedxml)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'feedxml' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($feedxml)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_rss($feedxml);
        }
    }

    protected function is_xml(&$response)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (bool) self::parameters(
            [
                'response' => DT::TEXT
            ])
            ->call(__FUNCTION__)
            ->with($response)
            ->returning(DT::BOOL);
        }
        else
        {
            return (bool) is_xml($response);
        }
    }

    protected function remove_parent_xml_node(&$xml, $node)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return self::parameters(
            [
                'xml'  => DT::TEXT,
                'node' => DT::STRING
            ])
            ->call(__FUNCTION__)
            ->with($xml, $node)
            ->returning(DT::VOID);
        }
        else
        {
            return remove_parent_xml_node($xml, $node);
        }
    }

    protected function xml_to_array($xml_object)
    {
        if (defined('STRICT_TYPES') && CAMEL_CASE == '1')
        {
            return (array) self::parameters(
            [
                'xml_object' => DT::TYPE_ARRAY
            ])
            ->call(__FUNCTION__)
            ->with($xml_object)
            ->returning(DT::TYPE_ARRAY);
        }
        else
        {
            return (array) xml_to_array($xml_object);
        }
    }
}
