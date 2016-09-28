<?php

function br2nl($input)
{
    return (string) preg_replace('/<br\s?\/?>/i', "\r\n", $input);
}
