<?php

function remove_first_occurrence($string, $search, $times)
{
    if (substr_count($string, $search) > $times)
    {
        $line_count = 0;
        $new_string = '';

        foreach (explode($search, $string) as $line)
        {
            if ($line_count >= $times) break;
            if ($line_count > 0)
            {
                $new_string .= $search;
            }

            $new_string .= $line;
            $line_count++;
        }

        return (string) $new_string;
    }

    return (string) $string;
}

// count the br - line breaks and loops through if pass 14 (then stops)
// $description = remove_first_occurrence($description, '<br', 14);
