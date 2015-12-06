<?php

/**
 * Test if a give filesystem path is absolute.
 * For example, '/foo/bar', or 'c:\windows'
 *
 * @param string $path File path
 * @return bool True if path is absolute, false is not absolute
 */

function is_path_absolute($path)
{
    // path is definitive
    if (realpath($path) == $path)
    {
        return TRUE;
    }

    // fails if $path does not exist or contains a symbolic link
    if (strlen($path) == 0 || $path[0] == '.')
    {
        return FALSE;
    }

    // Windows allows absolute paths like this.
    if (preg_match('#^[a-zA-Z]:\\\\#', $path))
    {
        return TRUE;
    }

    // path starting with / or \ is absolute; anything else is relative
    return ($path[0] == '/' || $path[0] == '\\');
}
