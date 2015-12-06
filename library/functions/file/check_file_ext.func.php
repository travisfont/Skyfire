<?php

function check_file_ext($file_name, $extensions)
{
    if (is_string($extensions) || is_array($extensions))
    {
        if (is_array($extensions))
        {
            $extensions = implode('|', $extensions);
        }

        if (preg_match('/[^\?]+\.('.$extensions.')/i', $file_name, $matches))
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    else
    {
        throw new Exception('Invalid parameter type for checkFileExt: second param');
    }
}
