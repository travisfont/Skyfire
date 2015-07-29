<?php

// str_replace('.func.php', '', dirname(__FILE__))

if (!function_exists('list_directory'))
{

    function list_directory($directory, $recursive = FALSE)
    {
        $array_items = array();
        if ($handle = opendir($directory))
        {
            while (($file = readdir($handle)) !== FALSE)
            {
                if ($file != "." && $file != "..")
                {
                    if (is_dir($directory. "/" . $file))
                    {
                        if ($recursive)
                        {
                            $array_items = array_merge($array_items, list_directory($directory. "/" . $file, $recursive));
                        }

                        $file = $directory . "/" . $file;
                        $array_items[] = preg_replace("/\/\//si", "/", $file);
                    }
                    else
                    {
                        $file = $directory . "/" . $file;
                        $array_items[] = preg_replace("/\/\//si", "/", $file);
                    }
                }
            }

            closedir($handle);
        }

        return $array_items;
    }

}

/*
// Example:
$diretory = list_directory('.', TRUE);
echo '<pre>';
print_r($diretory);
*/