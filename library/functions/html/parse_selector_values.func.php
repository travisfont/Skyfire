<?php

// retrieves all the values from a selector by parsing its HTML

function parse_selector_values($selector_html, $encoding = 'UTF-8')
{
    $dom = new DOMDocument('1.0', $encoding);
    $dom->loadHTML($selector_html);

    $xpath   = new DOMXpath($dom);
    $options = $xpath->query("*/select/option");
    $result  = array();

    foreach ($options as $option)
    {
        $optionValue          = $option->getAttribute('value');
        $optionContent        = $option->nodeValue;
        $result[$optionValue] = $optionContent;
    }

    return $result;
}

//var_dump(parse_selector_values($html));