<?php

function is_atom($feedxml)
{
    try
    {
        $feed = new SimpleXMLElement($feedxml);

        if ($feed->entry)
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
