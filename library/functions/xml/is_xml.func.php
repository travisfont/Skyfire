<?php

function is_xml(&$response)
{
    if (strlen($response) < 2)
    {
        return FALSE;
    }

    libxml_clear_errors();
    libxml_use_internal_errors(true);

    $doc = new DOMDocument('1.0', 'utf-8');
    $doc->loadXML($response);

    $errors = libxml_get_errors();

    switch (TRUE)
    {
        case (strlen($doc->saveXML()) < 100):
            return FALSE;
            break;
        case (empty($errors)):
            return TRUE;
            break;
        default:
            return FALSE;
            break;
    }
}