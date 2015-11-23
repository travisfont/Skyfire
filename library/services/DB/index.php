<?php

/* Skyfire loader for Stash Queries */

require_once 'StashQueries.php';

// setting Database credentials
DB::define('stash_dir',  PARENT_DIRECTORY);
DB::define('host',       DATABASE_HOST);
DB::define('dbname',     DATABASE_NAME);
DB::define('dbuser',     DATABASE_USER);
DB::define('dbpassword', DATABASE_PASSWORD);
