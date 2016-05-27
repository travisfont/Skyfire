<?php

// Shorten text while preserving the HTML tags. Useful for news and articles preview.

function safe_truncate($input, $break = ' ', $end_text = '...', $limit = 255, $tidy_html = TRUE, $strip_html = FALSE)
{
    if (strlen($input) >= $limit)
    {
        $breakpoint = strpos($input, $break, $limit);
        $input      = substr($input, 0, $breakpoint).$end_text;
    }

    if ($tidy_html === TRUE)
    {
        ob_start();

        $tidy   = new tidy;
        $config = array
        (
            'indent'         => TRUE,
            'output-xhtml'   => TRUE,
            'wrap'           => 200,
            'clean'          => TRUE,
            'show-body-only' => TRUE
        );

        $tidy->parseString($input, $config, 'utf8');
        $tidy->cleanRepair();

        $input = $tidy;
    }

    if ($strip_html === TRUE)
    {
        $input = strip_tags($input);
    }

    return (string) $input;
}
