<?php

function pr($data, $exit = TRUE)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if ($exit) exit;
}