<?php

/**
 * @param $content
 *
 * @return string
 */
function compress_html($content)
{
    $i       = 0;
    $content = preg_replace('~>\s+<~', '><', $content);
    $content = preg_replace('/\s\s+/',  ' ', $content);

    while ($i < 5)
    {
        $content = str_replace('  ', ' ', $content);
        $i++;
    }

    return (string) trim($content);
}
