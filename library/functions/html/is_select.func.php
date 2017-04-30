<?php

/**
 * @param $html
 * @param string $encoding
 *
 * @return bool
 */
function is_select($html, $encoding = 'UTF-8')
{
    $dom = new DOMDocument('1.0', $encoding);
    $dom->loadHTML($html);

    if ($dom->getElementsByTagName('select')->item(0)->nodeName == 'select')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

// if (is_select('html selector text here')) {}