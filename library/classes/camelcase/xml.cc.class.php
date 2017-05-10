<?php

/**
 * Class XML - Skyfire PHP
 *
 * XML interface and function into object inherence
 */
class XML extends Controller
{
    /**
     * @param $xml
     *
     * @return string
     */
    protected function formatXmlString($xml)
    { return (string) NULL; }

    /**
     * @param $feedxml
     *
     * @return string
     */
    protected function isAtom($feedxml)
    { return (string) NULL; }

    /**
     * @param $feedxml
     *
     * @return string
     */
    protected function isRss($feedxml)
    { return (string) NULL; }

    /**
     * @param $response
     *
     * @return string
     */
    protected function isXml(&$response)
    { return (string) NULL; }

    /**
     * @param $xml
     * @param $node
     *
     * @return void
     */
    protected function removeParentXmlNode(&$xml, $node)
    { return NULL; }

    /**
     * @param $xml_object
     *
     * @return array
     */
    protected function xmlToArray($xml_object)
    { return (array) NULL; }
}
