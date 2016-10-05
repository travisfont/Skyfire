<?php

function create_md5_timestamp()
{
    return (string) md5(time());
}
