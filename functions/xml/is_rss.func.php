<?php

function is_rss($feedxml)
{
    @$feed = new SimpleXMLElement($feedxml); 

    if ($feed->channel->item) { 
        return true; 
    } else { 
        return false; 
    } 
} 