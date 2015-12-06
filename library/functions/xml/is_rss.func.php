<?php

function is_rss($feedxml)
{
    try
    {
        $feed = new SimpleXMLElement($feedxml);

        if ($feed->channel->item)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    catch (Exception $e)
    {
        return FALSE;
    }
}
