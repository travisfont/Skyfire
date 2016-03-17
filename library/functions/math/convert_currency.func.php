<?php

function convert_currency($amount, $from, $to)
{

    $url = 'http://www.google.com/finance/converter?'.
           'a='   .strip_tags(trim($amount)).'&'.
           'from='.strip_tags(trim($from))  .'&'.
           'to='  .strip_tags(trim($to));

    if (!empty($_SERVER['HTTP_USER_AGENT']))
    {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
    }
    else
    {
        $user_agent = 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)';
    }

    $request  = curl_init();
    $time_out = 0;

    curl_setopt($request, CURLOPT_URL,             $url);
    curl_setopt($request, CURLOPT_RETURNTRANSFER,  1);
    curl_setopt($request, CURLOPT_USERAGENT,       $user_agent);
    curl_setopt($request, CURLOPT_CONNECTTIMEOUT,  $time_out);

    $response = curl_exec($request);
                curl_close($request);

                preg_match('#\<span class=bld\>(.+?)\<\/span\>#s', $response, $converted);

    $converted = trim($converted[0]);

    if (empty($converted))
    {
        return FALSE;
    }
    else
    {
        return $converted;
    }

    return $response;
}