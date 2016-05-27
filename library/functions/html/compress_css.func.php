<?php

function compress_css($buffer)
{
    /* remove comments in css file */
    $buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);

    /* also remove tabs, spaces, newlines, etc. */
    $buffer = str_replace(array("\r", "\n", "\r\n", "\t", '  ', '    ', '    '), '', $buffer);

    return (string) $buffer;
}