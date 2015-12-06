<?php

// converts normal text into emoji unicodes

function emoji($text)
{
    $emoji_list = array
    (
        ':neutral:' => "\xf0\x9f\x98\x90",
        ':twisted:' => "\xf0\x9f\x98\x88",
        ':arrow:'   => "\xe2\x9e\xa1",
        ':shock:'   => "\xf0\x9f\x98\xaf",
        ':smile:'   => '',
        ':???:'     => "\xf0\x9f\x98\x95",
        ':cool:'    => "\xf0\x9f\x98\x8e",
        ':evil:'    => "\xf0\x9f\x91\xbf",
        ':grin:'    => "\xf0\x9f\x98\x80",
        ':idea:'    => "\xf0\x9f\x92\xa1",
        ':oops:'    => "\xf0\x9f\x98\xb3",
        ':razz:'    => "\xf0\x9f\x98\x9b",
        ':wink:'    => "\xf0\x9f\x98\x89",
        ':cry:'     => "\xf0\x9f\x98\xa5",
        ':eek:'     => "\xf0\x9f\x98\xae",
        ':lol:'     => "\xf0\x9f\x98\x86",
        ':mad:'     => "\xf0\x9f\x98\xa1",
        ':sad:'     => '',
        '8-)'       => "\xf0\x9f\x98\x8e",
        '8-O'       => "\xf0\x9f\x98\xaf",
        ':-('       => '',
        ':-)'       => '',
        ':-?'       => "\xf0\x9f\x98\x95",
        ':-D'       => "\xf0\x9f\x98\x80",
        ':-P'       => "\xf0\x9f\x98\x9b",
        ':-o'       => "\xf0\x9f\x98\xae",
        ':-x'       => "\xf0\x9f\x98\xa1",
        ':-|'       => "\xf0\x9f\x98\x90",
        ';-)'       => "\xf0\x9f\x98\x89",
        '8)'        => "\xf0\x9f\x98\x8e",
        '8O'        => "\xf0\x9f\x98\xaf",
        ':('        => '',
        ':)'        => '',
        ':?'        => "\xf0\x9f\x98\x95",
        ':D'        => "\xf0\x9f\x98\x80",
        ':P'        => "\xf0\x9f\x98\x9b",
        ':o'        => "\xf0\x9f\x98\xae",
        ':x'        => "\xf0\x9f\x98\xa1",
        ':|'        => "\xf0\x9f\x98\x90",
        ';)'        => "\xf0\x9f\x98\x89",
        ':!:'       => "\xe2\x9d\x97",
        ':?:'       => "\xe2\x9d\x93",
    );

    return $emoji_list[strtolower(trim($text))];
}