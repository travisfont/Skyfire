# Stash Queries

Stash Queries is a PHP SQL library providing an easy, eloquent, and fluent yet expressive way to select, create, update, and delete SQL records. The layer fluency provides a direct way to interact with SQL using actual SQL files.

This library is originally part of Skyfire's PHP framework database layer known as *DB* service.

## Requirements

- PHP >=5.3+
- PDO_MYSQL PHP extensions

## Code Examples

```php

// SQL select query (with prepare variables)
$prepare = array
(
    'label' => 'test'
);
$data = DB::select('get.HomeTextByLabel')->prepare($prepare);
var_dump($data);

// SQL simple select query
$data = DB::select('get.AllHomeTextData')->execute();
var_dump($data);

// raw SQL query (with prepare variables)
$data = DB::query('SELECT * FROM test WHERE data IS NOT NULL AND id > :count AND data != :text', array
(
    ':id'   => 10,
    ':text' => 'test'
))->execute();
var_dump($data);
```

## License

Stash Queries is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2015 [Travis van der Font](www.twitter.com/travisfont)
