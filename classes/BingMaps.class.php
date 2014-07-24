<?php

// requires the <body onload="GetMap();">

define('BING_LOCATION_URL',    'http://dev.virtualearth.net/REST/v1/Locations');
define('BING_MAP_CONTROL_URL', 'http://ecn.dev.virtualearth.net/MapControl/mapcontrol.ashx');

class BingMaps
{
    private $key   = NULL;
    private $DivID = 'myMap';
    private $v     = '7.0';
    public static $latitude  = 0;
    public static $longitude = 0;
    public static $enableClickableLogo = TRUE;
    public static $enableSearchLogo    = TRUE;
    public static $showCopyright       = TRUE;
    public static $showScalebar        = TRUE;
    public static $zoom      = 18;
    public static $MapTypeId = 'birdseye';

    public function SetVersion($v)
    {
        $this->v = $v;
    }

    public function SetDivID($key)
    {
        $this->DivID = $key;
    }

    public function SetKey($key)
    {
        $this->key = $key;
    }

    // returns false upon address lookup failure
    public function GetLocationByAddress($address)
    {
        $json = json_decode(file_get_contents(BING_LOCATION_URL.'?q='.urlencode($address).'&key='.$this->key));
        if ($json->statusCode == 200)
        {
            self::$latitude  = $json->resourceSets[0]->resources[0]->geocodePoints[0]->coordinates[0];
            self::$longitude = $json->resourceSets[0]->resources[0]->geocodePoints[0]->coordinates[1];
        }
        else
        {
            return FALSE;
        }
    }
    
    function GetMap()
    {
        return '
        <script type="text/javascript" src="'.BING_MAP_CONTROL_URL.'?v='.$this->v.'"></script>
        <script type="text/javascript">// reference: http://www.bingmapsportal.com/isdk/ajaxv7
        var map = null;         
        function GetMap()
        {
            var mapOptions = 
            {
                credentials:"'.$this->key.'",
                center: new Microsoft.Maps.Location('.self::$latitude.', '.self::$longitude.'),
                zoom: '.self::$zoom.',
                mapTypeId:Microsoft.Maps.MapTypeId.'.self::$MapTypeId.',
                labelOverlay: Microsoft.Maps.LabelOverlay.hidden,
                enableClickableLogo: '.self::$enableClickableLogo.',
                enableSearchLogo: '.self::$enableSearchLogo.',
                showCopyright: '.self::$showCopyright.',
                showScalebar: '.self::$showScalebar.'
            }
            
            // Initialize the map
            map = new Microsoft.Maps.Map(document.getElementById("'.$this->DivID.'"), mapOptions);
            
            var pushpin = new Microsoft.Maps.Pushpin(map.getCenter(), null); 
            map.entities.push(pushpin);
        }
        </script>
        ';
    }
    
    function DisplayMap($width = 400, $height = 400)
    {
        return '<div id="'.$this->DivID.'" style="position:relative; width:'.$width.'px; height:'.$height.'px;"></div>';
    
    }
}