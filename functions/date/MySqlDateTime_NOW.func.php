<?php

class MySqlDateTime
{
    public static function NOW()
    {
        return date('Y-m-d H:i:s');
    }

}

// MySqlDateTime::NOW();

// returns the equivalent of MySQL NOW()