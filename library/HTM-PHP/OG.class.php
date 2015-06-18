<?php

class og
{
    public static $url, $title, $image;
    public static $type, $locale, $video;
    public static $audio, $description, $site_name;
    public static $determiner, $restrictions;
    public static $updated_time, $see_also;

    // more info at:
    // https://developers.facebook.com/docs/opengraph/property-types/

    public static function __callStatic($object, $attributes)
    {
        // object properties
        $objects = array
        (
            'url', 'title', 'image',
            'type','locale','video',
            'audio','description', 'site_name',
             'determiner', 'restrictions',
            'updated_time', 'see_also'
        );

        if (in_array($object, $objects))
        {
            if (isset($attributes[0]))
            {
                static::${$object} = '<meta property="og:'.$object.'" content="'.strip_tags($attributes[0]).'" />'."\n\r";
            }
        }
    }
}

/* example:

# setting the OG Object Tags
og::site_name('Test Site');
og::type('product');
og::image('http://www.test.com/images/product1.png');

# displaying the OG Object Tags
echo og::$type;
echo og::$image;
echo og::$site_name;

*/
