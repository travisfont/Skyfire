<?php

function is_xml( &$sResponse )
{
    if( strlen($sResponse) < 2  ) {
        return false;
    }

    libxml_clear_errors();
    libxml_use_internal_errors(true);

    $oDoc = new DOMDocument('1.0', 'utf-8');
    $oDoc->loadXML( $sResponse );

    $aErrors = libxml_get_errors();

    switch( true )
    {
        case( strlen($oDoc->saveXML()) < 100 ):
            return false;
        break;

        case( empty($aErrors) ):
            return true;
        break;

        default:
            return false;
        break;
    }
}