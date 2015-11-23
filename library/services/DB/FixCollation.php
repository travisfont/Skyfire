<?php

class FixCollation
{
    const TEXT_HTML = 'html';
    const TEXT_PAIN = 'plain';

    public static function charset($type, $text = self::TEXT_HTML)
    {
        header('Content-Type: text/'.$text.'; charset='.$type);
    }
}