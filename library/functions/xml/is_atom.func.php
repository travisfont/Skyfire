<?php

function is_atom($feedxml)
{ 
    @$feed = new SimpleXMLElement($feedxml); 

    if ($feed->entry)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    } 
} 