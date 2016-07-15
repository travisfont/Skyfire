<?php 

class cURL
{
	private $headers; 
    private $compression;
	private $cookie_file; 
	private $proxy;
    private $user_agent = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';

    public static $UserAgent;

    private function cookie($cookie_file)
	{
		if (file_exists($cookie_file))
		{
			$this->cookie_file = $cookie_file;
		}
		else
		{
			if (fopen($cookie_file, 'w'))
            {
                $this->cookie_file = $cookie_file;

                @fclose($this->cookie_file);
            }
            else
            {
                trigger_error('The cookie file could not be opened. Make sure this directory has the correct permissions', E_USER_ERROR);
            }

		}
	}

	public function __construct($cookies = TRUE, $cookie = 'cookies.txt', $compression = 'gzip', $proxy = '')
	{
		$this->headers[]	= 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg'; 
		$this->headers[]	= 'Connection: Keep-Alive'; 
		$this->headers[]	= 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
		$this->compression	= $compression; 
		$this->proxy		= $proxy; 
		$this->cookies		= $cookies;

		if ($this->cookies === TRUE)
		{
			$this->cookie($cookie);
		}

        if (!empty(static::$user_agent))
        {
            $this->user_agent = static::$UserAgent;
        }
	}

    public function setUserAgent($user_agent)
    {
        $this->user_agent = $user_agent;
    }

	public function get($url)
	{
        /*if (!empty(static::$user_agent))
        {
            $this->user_agent = static::$UserAgent;
        }*/

        $process = curl_init($url);

		curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($process, CURLOPT_HEADER,     0);
		curl_setopt($process, CURLOPT_USERAGENT,  $this->user_agent);

		if ($this->cookies == TRUE)
		{
			curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
		}
		if ($this->cookies == TRUE)
		{
			curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
		}

		curl_setopt($process,CURLOPT_ENCODING , $this->compression);
		curl_setopt($process, CURLOPT_TIMEOUT,  30);

		if ($this->proxy)
		{
			curl_setopt($process, CURLOPT_PROXY, $this->proxy);
		}

		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($process, CURLOPT_FOLLOWLOCATION, TRUE);

		$return = curl_exec($process);
		          curl_close($process);

		return $return;
	}

	public function post($url, $data)
	{
        /*if (!empty(static::$user_agent))
        {
            $this->user_agent = static::$UserAgent;
        }*/

        $process = curl_init($url);

		curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
		curl_setopt($process, CURLOPT_HEADER,     TRUE);
		curl_setopt($process, CURLOPT_USERAGENT,  $this->user_agent);

		if ($this->cookies == TRUE)
		{
			curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
		}

		if ($this->cookies == TRUE)
		{
			curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
		}

		curl_setopt($process, CURLOPT_ENCODING, $this->compression);
		curl_setopt($process, CURLOPT_TIMEOUT,  30);

		if ($this->proxy)
		{
			curl_setopt($process, CURLOPT_PROXY, $this->proxy);
		}

		curl_setopt($process, CURLOPT_POSTFIELDS,     $data);
		curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($process, CURLOPT_FOLLOWLOCATION, TRUE);
		curl_setopt($process, CURLOPT_POST,           TRUE);

		$return = curl_exec($process);
		          curl_close($process);

		return $return;
	}
}

// EXAMPLE:

/*
$options = array
(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
);
$cc = new cURL($options); 
*/

$cc = new cURL(); 
$tss1 = $cc->get('http://www.healthspace.ca/Clients/VDH/LFairfax/LFairfax_Website.nsf/Food-FacilityHistory?OpenView&RestrictToCategory=57727DA855A77D1E85257508007515D7'); 

/*
$parameters = array
(
    'foo' => 'bar'
);
$cc->post('http://www.example.com', $parameters); 
*/

#$cc->post('http://www.example.com','foo=bar'); 

echo $tss1;
