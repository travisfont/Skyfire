<?php

// XML interface and function into object inherence

class XML extends Controller
{
    protected function xmlToArray($xml_object)
    { return (array) NULL; }

    protected function removeParentNode(&$xml, $node)
    { return; }

    protected function formatXmlString($xml)
    { return (string) NULL; }

    protected function isXml(&$response)
    { return (string) NULL; }

    protected function isRss($feedxml)
    { return (string) NULL; }

    protected function isAtom($feedxml)
    { return (string) NULL; }
}
