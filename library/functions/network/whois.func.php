<?php

// Whois sever lookup function

function whois($domain, $registrar = FALSE)
{
    // fixing the domain name format
    $domain = strtolower(trim($domain));
    $domain = preg_replace("/^http:\/\//i", '', $domain);
    $domain = preg_replace("/^www\./i", '', $domain);
    $domain = explode('/', $domain);
    $domain = trim($domain[0]);

    // server output string
    $output = FALSE;

    if (!$registrar)
    {
        // server resoures and lists
        $servers = array
        (
            'ac'    => 'whois.nic.ac',
            'ae'    => 'whois.uaenic.ae',
            'aero'  => 'whois.information.aero',
            'asia'  => 'whois.dotasia.net',
            'at'    => 'whois.ripe.net',
            'au'    => 'whois.aunic.net',
            'be'    => 'whois.dns.be',
            'bg'    => 'whois.ripe.net',
            'biz'   => 'whois.neulevel.biz',
            'br'    => 'whois.registro.br',
            'bz'    => 'whois.belizenic.bz',
            'ca'    => 'whois.cira.ca',
            'cat'   => 'whois.cat',
            'cc'    => 'whois.nic.cc',
            'ch'    => 'whois.nic.ch',
            'cl'    => 'whois.nic.cl',
            'cn'    => 'whois.cnnic.net.cn',
            'com'   => 'whois.internic.net',
            'coop'  => 'whois.nic.coop',
            'cz'    => 'whois.nic.cz',
            'de'    => 'whois.nic.de',
            'edu'   => 'whois.educause.net',
            'eu'    => 'whois.eu',
            'fr'    => 'whois.nic.fr',
            'gov'   => 'whois.nic.gov',
            'hu'    => 'whois.nic.hu',
            'ie'    => 'whois.domainregistry.ie',
            'il'    => 'whois.isoc.org.il',
            'in'    => 'whois.ncst.ernet.in',
            'info'  => 'whois.afilias.net',
            'int'   => 'whois.iana.org',
            'ir'    => 'whois.nic.ir',
            'job'   => 'jobswhois.verisign-grs.com',
            'mc'    => 'whois.ripe.net',
            'mil'   => 'rs.internic.net',
            'mobi'  => 'whois.dotmobiregistry.net',
            'museum'=> 'whois.museum',
            'name'  => 'whois.nic.name',
            'net'   => 'whois.internic.net',
            'nl'    => 'whois.domain-registry.nl',
            'org'   => 'whois.pir.org',
            'pro'   => 'whois.registrypro.pro',
            'ru'    => 'whois.ripn.net',
            'tel'   => 'whois.nic.tel',
            'to'    => 'whois.tonic.to',
            'travel'=> 'whois.nic.travel',
            'tv'    => 'whois.tv',
            'us '   => 'whois.nic.us'
        );

        // split the TLD from domain name
        $_domain = explode('.', $domain);
        $lst     = count($_domain)-1;
        $ext     = $_domain[$lst];

        if (!isset($servers[$ext]))
        {
            trigger_error('No matching nic server found!', E_USER_ERROR);
        }

        $nic_server = $servers[$ext];
    }
    else
    {
        $nic_server = strip_tags(trim($registrar));
    }

    // connect to whois server
    if ($conn = fsockopen($nic_server, 43))
    {
        fputs($conn, $domain."\r\n");
        while (!feof($conn))
        {
            $output .= fgets($conn,128);
        }
        fclose($conn);
    }
    else
    {
        trigger_error('Could not connect to '.$nic_server.'!', E_USER_ERROR);
    }

    return $output;
}

/* EXAMPLE

$domain = 'http://www.google.com';
if ($result = whois($domain))
{
    echo '<pre>';
    print_r($result);
}
*/
