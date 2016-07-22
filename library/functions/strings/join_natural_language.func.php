<?php

/**
 * Join a string with a natural language conjunction at the end.
 */
function join_natural_language(array $list, $conjunction = 'and')
{
    $last = array_pop($list);

    if ($list)
    {
        return (string) implode(', ', $list).' '.$conjunction.' '.$last;
    }

    return (string) $last;
}

/*
// null
var_dump(join_natural_language(array()));
// string 'one'
var_dump(join_natural_language(array('one')));
// string 'one and two'
var_dump(join_natural_language(array('one', 'two')));
// string 'one, two and three'
var_dump(join_natural_language(array('one', 'two', 'three')));
// string 'one, two, three or four'
var_dump(join_natural_language(array('one', 'two', 'three', 'four'), 'or'));
 */
