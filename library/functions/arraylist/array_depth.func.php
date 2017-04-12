<?php

/**
 * display (int) the number of dimensions (depth) within an array (ignores recusion arrays)
 *
 * @param array $array
 *
 * @return int
 */
function array_depth(array $array)
{
    $max_depth = 1;
    $array['$__compute_array_depth_flag'] = 1;

    foreach ($array as $value)
    {
        if (is_array($value) && !isset($value['$__compute_array_depth_flag']))
        {
            $depth = array_depth($value) + 1;

            if ($depth > $max_depth)
            {
                $max_depth = $depth;
            }
        }
    }

    unset($array['$__compute_array_depth_flag']);

    return $max_depth;
}