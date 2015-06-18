<?php

function is_atom($feedxml)
{ 
    @$feed = new SimpleXMLElement($feedxml); 

    if ($feed->entry) { 
        return true; 
    } else { 
        return false; 
    } 
} 