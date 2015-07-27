<?php

function is_rss($feedxml)
{
    @$feed = new SimpleXMLElement($feedxml); 

    if ($feed->channel->item)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    } 
} 