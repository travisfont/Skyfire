<?php 

// scan the entire /config directory specifically for ini files

class cfg
{
    public static function scanDirectory()
    {
        $directory    = PARENT_DIRECTORY.'/config';
        $config_files = array();

        if (is_dir($directory))
        {
            if ($handle = opendir($directory))
            {
                while (FALSE !== ($file = readdir($handle)))
                {
                    if ($file != '.' && $file != '..')
                    {
                        if (is_dir($directory.'/'.$file))
                        {
                            $config_files[] = preg_replace("/\/\//si", '/', $file);
                        }
                        else
                        {
                            $config_files[] = preg_replace("/\/\//si", '/', $file);
                        }
                    }
                }

                closedir($handle);
            }

            return $config_files;
        }
        else
        {
            die ('System configuration directory \'config\' cannot be found. Cannot continue.');
        }

    }

    public static function registerConfig($file)
    {
        foreach (parse_ini_file(PARENT_DIRECTORY.'/config/'.$file) as $element => $value)
        {
            if (!defined(strtoupper($element)))
            {
                define(strtoupper($element), $value);
            }
        }
    }

    public static function registerRoutesConfig()
    {
        return parse_ini_file(PARENT_DIRECTORY.'/config/routes.ini', TRUE);
    }

    public static function registerErrorsConfig()
    {
        $errors = array();

        foreach (parse_ini_file(PARENT_DIRECTORY.'/config/errors.ini', TRUE) as $label => $config_values)
        {
            if (isset($config_values['REQUEST']) && isset($config_values['METHOD']) && isset($config_values['CONTROLLER']))
            {
                $errors[$config_values['REQUEST']][$config_values['METHOD']]
                    = (object) array_merge(array('label' => $label), array_change_key_case($config_values, CASE_LOWER));
            }
        }

        return $errors;
    }
}