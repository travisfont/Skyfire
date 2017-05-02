<?php

/**
 * MySqlDateTime::NOW();
 * returns the equivalent of MySQL NOW()
 *
 * @return string
 */
function mysql_now()
{
    return (string) date('Y-m-d H:i:s');
}
