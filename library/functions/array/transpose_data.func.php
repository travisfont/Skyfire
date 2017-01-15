<?php

function transpose_data(array $array)
{
    $rebuilt_array = array();

    foreach ($array as $row => $columns)
    {
        foreach ($columns as $row2 => $column2)
        {
            $rebuilt_array[$row2][$row] = $column2;
        }
    }

    return $rebuilt_array;
}

/*
$data = array
(
  array('Items',  'A',   'B',   'C',   'D'),
  array('Item 1', '100', '100', '200', '50'),
  array('Item 2', '200', '100', '100', '100'),
  array('Item 3', '0',   '200', '200', '100')
);
$data = transpose_data($data);
*/