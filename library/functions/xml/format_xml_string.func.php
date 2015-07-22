<?php

function format_xml_string($xml)
{
    if ($dom = new DOMDocument)
    {
        $dom->preserveWhiteSpace = FALSE;
        $dom->loadXML('<root><foo><bar>baz</bar></foo></root>');
        $dom->formatOutput = TRUE;

        return $dom->saveXml();
    }
    else
    {
    
        $xml        = preg_replace('/(>)(<)(\/*)/', "$1\n$2$3", $xml);
        $token      = strtok($xml, "\n");
        $result     = '';
        $pad        = 0; 
        $matches    = array();
        while ($token !== FALSE)
        {
            if (preg_match('/.+<\/\w[^>]*>$/', $token, $matches))
            {
                $indent = 0;
            }
            elseif (preg_match('/^<\/\w/', $token, $matches))
            {
                $pad--;
                $indent = 0;
            }
            elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches))
            {
                $indent = 1;
            }
            else
            {
                $indent = 0;
            }

            $line    = str_pad($token, strlen($token)+$pad, ' ', STR_PAD_LEFT);
            $result .= $line . "\n";
            $token   = strtok("\n");
            $pad    += $indent;
        }

        return $result;
    
        // reference
        // http://www.daveperrett.com/articles/2007/04/05/format-xml-with-php/
    }
}