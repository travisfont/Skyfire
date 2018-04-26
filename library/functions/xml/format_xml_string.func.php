<?php

/**
 * @param $xml
 *
 * @return string
 */
function format_xml_string($xml)
{
    if ($dom = new DOMDocument)
    {
        $dom->preserveWhiteSpace = FALSE;
        $dom->formatOutput       = TRUE;
        $dom->loadXML(trim($xml));

        return (string) $dom->saveXml();
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
                $pad -=3;
                $indent = 0;
            }
            elseif (preg_match('/^<\w[^>]*[^\/]>.*$/', $token, $matches))
            {
                $indent = 2;
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

        return (string) $result;
    }
}
