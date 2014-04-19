# Skyfire

Skyfire is an extension of Travis van der Font's awesome PHP coding adventures and finds.

This is not a micro-framework but simply a library. Well, soon it'll be yet another PHP framework.

Want to lurk a bit more? [See his twitter](https://twitter.com/travisfont)!

----------------------------

###Library:

| Function | Parameter(s) | Return | Description
| --- | --- | --- | ---
| ***arrays*** | | | 
| **[array_multi_subsort](https://github.com/tfont/Skyfire/blob/master/functions/arrays/array_multi_subsort.func.php)()** | 1.`$array` <br />2.`$subkey` | `***array***` | ...
| **[array_random](https://github.com/tfont/Skyfire/blob/master/functions/arrays/array_random.func.php)()** | 1.`$arr` <br />2.`$num = 1` | `abc` | ...
| **[csv_to_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/csv_to_array.func.php)()** | 1.`$filename` <br />2.`$delimiter = ','`| `abc` | Converts a CSV file to an associated array
| **[in_multi_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/in_multi_array.func.php)()** | 1.`$needle` <br />2.`$haystack` 3.`$strict = FALSE`| `abc` | ...
| **[is_associative_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/is_associative_array.func.php)()** | 1.`$array` | `abc` | Detects if an array is associative
| **[objects_to_arrays](https://github.com/tfont/Skyfire/blob/master/functions/arrays/objects_to_arrays.func.php)()** | 1.`$obj` <br />2.`&$arr` | `abc` | Converts objects to an array
| **[rand_array_element](https://github.com/tfont/Skyfire/blob/master/functions/arrays/rand_array_element.func.php)()** | 1.`$array` | `abc` | ...
| ***database*** | | | 
| ***date*** | | | 
| **[datetime_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/datetime_diff.func.php)(****)** | 1.`$date1` <br />2.`$date2` | `abc` | ...
| **[days_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/days_diff.func.php)()** | 1.`$date1` <br />2.`$date2` <br />3.`$accuracy_day = FALSE` | `abc` | Days difference between two dates
| **[months_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/months_diff.func.php)()** | 1.`$date1` <br />2.`$date2 = FALSE` | `abc` | Months difference between two dates
| **[show_time_left](https://github.com/tfont/Skyfire/blob/master/functions/date/show_time_left.func.php)()** | 1.`$dbdate` | `abc` | Displays the remain time (including day) from the input date
| ***html*** | | | 
| ***math*** | | | 
| **[crypto_rand](https://github.com/tfont/Skyfire/blob/master/functions/math/crypto_rand.func.php)()** | 1.`$min` <br />2.`$max` | `abc` | A secure replacement for number randomizing using OpenSSL
| **[display_percentage_saved](https://github.com/tfont/Skyfire/blob/master/functions/math/display_percentage_saved.func.php)()** | `1.`$original_price <br />2.`$current_price` | `abc` | Calculates the percentage from original price to a new savings price
| **[leading_zero](https://github.com/tfont/Skyfire/blob/master/functions/math/leading_zero.func.php)()** | 1.`$num` <br />2.`$places = 0` | `abc` | Adds leading zeros to any integer value
| **[random_number](https://github.com/tfont/Skyfire/blob/master/functions/math/random_number.func.php)()** | 1.`$digits` <br />2.`$leading_zeros = FALSE` | `abc` | Basic number randomiser (includes leading zeros parameter)
| ***misc*** | | | 
| **[get_coordinates_by_address](https://github.com/tfont/Skyfire/blob/master/functions/misc/get_coordinates_by_address.func.php)()** | 1.`$address` | `abc` | Gets Coordinates from an address
| **[is_utf8](https://github.com/tfont/Skyfire/blob/master/functions/misc/is_utf8.func.php)()** | 1.`$string` | `abc` | Returns true if the input string is valid UTF-8 and false otherwise
| **[list_directory](https://github.com/tfont/Skyfire/blob/master/functions/misc/list_directory.func.php)()** | 1.`$directory` <br />2.`$recursive = FALSE` | `abc` | List of folders and files in a directory and/or sub-directories
| **[simple_address_verify](https://github.com/tfont/Skyfire/blob/master/functions/misc/simple_address_verify.func.php)()** | 1.`$address` | `abc` | A simple address verification (USA only)
| ***social*** | | | 
| ***strings*** | | | 
| **[generate_password](https://github.com/tfont/Skyfire/blob/master/functions/strings/generate_password.func.php)()** | 1.`$length = 9` <br />2.`$strength = 4` | `abc` | Generates a password based on length and crack strength
| **[remove_first_line](https://github.com/tfont/Skyfire/blob/master/functions/strings/remove_first_line.func.php)()** | 1.`$str` | `abc` | Removes the first line of a string
| **[str_to_slug](https://github.com/tfont/Skyfire/blob/master/functions/strings/str_to_slug.func.php)()** | 1.`$string` | `abc` | Converts a string into a url slug
| ***xml*** | | | 
| **[format_xml_string](https://github.com/tfont/Skyfire/blob/master/functions/xml/format_xml_string.func.php)()** | 1.`$xml` | `abc` | Formats XML
| **[is_atom](https://github.com/tfont/Skyfire/blob/master/functions/xml/is_atom.func.php)()** | 1.`$feedxml` | `abc` | Detects if the XML is a possible ATOM XML feed.
| **[is_rss](https://github.com/tfont/Skyfire/blob/master/functions/xml/is_rss.func.php)()** | 1.`$feedxml` | `abc` | Detects if the XML is a possible RSS XML feed.
| **[xml_remove_parent_node](https://github.com/tfont/Skyfire/blob/master/functions/xml/xml_remove_parent_node.func.php)()** | 1.`&$xml` <br />2.`$node` | `abc` | Removes the parent node from the XML
| **[xml_to_array](https://github.com/tfont/Skyfire/blob/master/functions/xml/xml_to_array.func.php)()** | 1.`$xml` | `abc` | Converts XML to an array

####Class objects:


- **[get_exec_time] (https://github.com/tfont/Skyfire/blob/master/classes/get_exec_time.class.php) -**  php timer class (see how long a script takes to execute)

 * get_exec_time::start()
 * get_exec_time::end()
 * get_exec_time::$display
 
 
 ___________________________________________________________
 
####Useage:
 
**Libraries (concept still):**
 
```php
load::library('date'); // will load all date library functions
 
load::library('date')->function('next_week'); // will load the next_week() from date library
```


**Routes (concept still):**
```php
route::url('contact/{department}')->controller('contact')::POST;
route::url('news/{title}-{date}/{id}')->controller('news'); // 'GET' isn't required (default method)
route::url('news/{title}-{date}/{id}')->controller('news')::GET;
 
// url(string, boolean) -> default boolean is false value constant get, and post is true
```