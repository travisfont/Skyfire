<?php

function is_input($html, $encoding = 'UTF-8')
{
    $dom = new DOMDocument('1.0', $encoding);
    $dom->loadHTML($html);

    if ($dom->getElementsByTagName('input')->item(0)->nodeName == 'input')
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

// if (is_input('html input text here')) {}