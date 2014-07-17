<?php


function trim_array_values($array)
{
    foreach ($array as $key => $subarray)
    {
        
        if (is_array($subarray))
        {
            $result[$key] = trim_array_values($subarray);
        }
        else
        {
            $result[$key] = trim($subarray);
        }
        
        
    }

    return $result;
}

// Example:

$array = array
(
    array('  fdsfsd', 'vlvlvl vl', ' ererere'),
    array('fdsfs ', 'cporn gg', 'dlfjvens '),
    array('jgfh fhy ', ' gf dbt gf dgd', ' 4324 32432  ')
);

$results = trim_array_values($array);

echo '<pre>';
print_r($results);