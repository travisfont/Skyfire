<?php

class googlePlaces
{
    public $error = array();

    protected $apiKey;
    protected $url = FALSE;
    protected $query;
    protected $sensor = 'true';
    protected $radius = 50000;

    function __construct($apiKey)
    {
        if (strlen($apiKey) > 38)
        {

            $this->apiKey = $apiKey;
        }
        else
        {
            $this->error[] = 'less than 38 character key length';
            return FALSE;
        }

    }

    public function setSensor($sensor)
    {
        if ($sensor === TRUE || $sensor == 'true')
        {
            $this->sensor = 'true';
        }
        if ($sensor === FALSE || $sensor == 'false')
        {
            $this->sensor = 'false';
        }
    }

    public function setQuery($query)
    {
        $this->query = urlencode($query);
    }

    public function setRadius($radius)
    {
        if ((int) $radius > 0)
        {
            $this->radius = $radius;
        }
        else
        {
            return FALSE;
        }
    }

    public function Search()
    {
        $this->url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?'
        .'query='.$this->query
        .'&sensor='.$this->sensor
        .'&radius='.$this->radius
        .'&key='.$this->apiKey;

        if ($this->url)
        {
            if ($string = file_get_contents($this->url))
            {
                $results = json_decode($string);
                if (isset($results->results))
                {
                    return $results->results;
                }
                elseif (isset($results))
                {
                    return $results;
                }
                else
                {
                    //return FALSE;
                }

            }
            else
            {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }

    }
    
    // get zipcode from query and retrieve the coordinates
    #public function defaultLatLng()
    public function setCenter()
    {
        return TRUE;
    }
    
    public function display()
    {
        return $this->centerUSA();
    }
    
    // turn this into a static variable if possible (using 'googlePlaces->display->centerUSA')
    public function centerUSA()
    {
        return 'new google.maps.LatLng(39.828175, -98.5795)';
    }

}

?>