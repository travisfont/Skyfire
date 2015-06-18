<?php

define('INSTAGRAM_ACCESS_TOKEM', 123456789);
// http://instagram.com/developer/authentication/

class Instagram
{
    const   HASHTAG = 0;
    const   USER    = 1;
    private $url;

    public function __construct($needle, $type = 0)
    {
        switch ($type)
        {
            case 0:
                $this->url = 'https://'.
                             'api.instagram.com'.
                             '/v1'.
                             '/tags'.
                             '/'.$needle.
                             '/media'.
                             '/recent'.
                             '?access_token='. INSTAGRAM_ACCESS_TOKEM;
                break;
        }

    }

    public function get($limit = 10)
    {
        $edit = json_decode(file_get_contents($this->url), TRUE);
        $output = $edit['data'];

        if ($output)
        {
            return json_encode($output);
        }
        else
        {
            return FALSE;
        }
    }
}


// $data = new Instagram('luxembourg', Instagram::HASHTAG);
// echo $data->get();