<?php


/**
 * Lists contens of a given directory and returns array with entries
 *
 * @param   $directory  string. source path of the root directory
 * @param   $recursive  bool.   to continue to return subdirectories
 *
 * @access  public
 * @return  array  directory entries
 * @author  Travis van der Font
 */


function list_directory($directory, $recursive = FALSE)
{
    $array_items = array();

    if ($handle = opendir($directory))
    {
        while (($file = readdir($handle)) !== FALSE)
        {
            if ($file != '.' && $file != '..')
            {
                if (is_dir($directory.'/'.$file))
                {
                    if ($recursive)
                    {
                        $array_items = array_merge($array_items, list_directory($directory.'/'.$file, $recursive));
                    }

                    $array_items[] = preg_replace("/\/\//si", "/", $directory.'/'.$file);
                }
                else
                {
                    $array_items[] = preg_replace("/\/\//si", "/", $directory.'/'.$file);
                }
            }
        }

        closedir($handle);
    }

    asort($array_items);

    return (array) array_values($array_items);
}


/*
// Example:
$diretory = list_directory('.', TRUE);
echo '<pre>';
print_r($diretory);
*/
