# Skyfire

Skyfire is an extension of Travis van der Font's awesome PHP coding concepts, adventures, and finds.

This is not a micro-framework but simply a library. Well, soon it'll be yet another PHP framework.

Want to lurk a bit more? [See his twitter](https://twitter.com/travisfont)!

----------------------------

###Library:

| Function | Parameter(s) | Return | Description
| --- | --- | --- | ---
| ***» arrays*** | | | 
| **[array_multi_subsort](https://github.com/tfont/Skyfire/blob/master/functions/arrays/array_multi_subsort.func.php)()** | **1.** $array <br />**2.** $subkey | *`array`* | ...
| **[array_random](https://github.com/tfont/Skyfire/blob/master/functions/arrays/array_random.func.php)()** | **1.** $arr <br />**2.** $amount  <br/>`= 1` | *`array`* | Returns random element(s) from an array
| **[csv_file_to_assoc_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/csv_file_to_assoc_array.func.php)()** | **1.** $filename <br />**2.** $delimiter <br>`= ','`| *`array`* | Converts a CSV file to an associative array
| **[csv_file_to_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/csv_file_to_array.func.php)()** | **1.** $data | *`array`* | Converts a CSV file to an array
| **[csv_to_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/csv_to_array.func.php)()** | **1.** $data | *`array`* | Converts a CSV string to an array
| **[in_multi_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/in_multi_array.func.php)()** | **1.** $needle <br />**2.** $haystack <br />**3.** $strict <br /> `= FALSE` | *`bool`* | ...
| **[is_associative_array](https://github.com/tfont/Skyfire/blob/master/functions/arrays/is_associative_array.func.php)()** | **1.** $array | *`bool`*| Detects if an array is associative
| **[objects_to_arrays](https://github.com/tfont/Skyfire/blob/master/functions/arrays/objects_to_arrays.func.php)()** | **1.** $obj <br />**2.** &$arr | *`array`*| Converts objects to an array
| **[rand_array_element](https://github.com/tfont/Skyfire/blob/master/functions/arrays/rand_array_element.func.php)()** | **1.** $array | *`string`* | Returns a random element from an array
| **[trim_array_values](https://github.com/tfont/Skyfire/blob/master/functions/arrays/trim_array_values.func.php)()** | **1.** $array | *`array`* |  Returns trim (removes white spaces) from arrays including multi-dimensional arrays
| ***» database*** | | | 
| ***» date*** | | | 
| **[datetime_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/datetime_diff.func.php)()** | **1.** $date1 <br />**2.** $date2 |  *`object`* | ...
| **[days_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/days_diff.func.php)()** | **1.** $date1 <br />**2.** $date2 <br />**3.**$accuracy_day <br /> `= FALSE` | *`integer`* | Days difference between two dates
| **[months_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/months_diff.func.php)()** | **1.** $date1 <br />**2.** $date2 <br />`= FALSE` | *`integer`* | Months difference between two dates
| **[MySqlDateTime::NOW](https://github.com/tfont/Skyfire/blob/master/functions/date/MySqlDateTime_NOW.func.php)()** | | *`string`*  | Returns the equivalent of MySQL NOW()
| **[show_time_left](https://github.com/tfont/Skyfire/blob/master/functions/date/show_time_left.func.php)()** | **1.** $dbdate | *`string`* | Displays the remain time (including day) from the input date
| ***» html*** | | | 
| ***» math*** | | | 
| **[crypto_rand](https://github.com/tfont/Skyfire/blob/master/functions/math/crypto_rand.func.php)()** | **1.** $min <br />**2.** $max | *`integer`* | A secure replacement for number randomizing using OpenSSL
| **[percentage_saved](https://github.com/tfont/Skyfire/blob/master/functions/math/display_percentage_saved.func.php)()** | **1.** $original_price <br />**2.** $current_price | *`string`* | Calculates the percentage from original price to a new savings price
| **[leading_zero](https://github.com/tfont/Skyfire/blob/master/functions/math/leading_zero.func.php)()** | **1.** $num <br />**2.** $places <br />`= 0` | *`string`* | Adds leading zeros to any integer value
| **[random_number](https://github.com/tfont/Skyfire/blob/master/functions/math/random_number.func.php)()** | **1.** $digits <br />**2.** $leading_zeros <br />`= FALSE` | *`string`* | Basic number randomiser (includes leading zeros parameter)
| ***» misc*** | | | 
| **[ddf](https://github.com/tfont/Skyfire/blob/master/functions/misc/ddf.func.php)()** | **1.** ??? | N/A | Creates a file that displays the elements data
| **[get_address_coordinates](https://github.com/tfont/Skyfire/blob/master/functions/misc/get_address_coordinates.func.php)()** | **1.** $address | *`array`* | Gets Coordinates from an address
| **[is_utf8](https://github.com/tfont/Skyfire/blob/master/functions/misc/is_utf8.func.php)()** | **1.** $string | *`bool`* | Returns true if the input string is valid UTF-8 and false otherwise
| **[list_directory](https://github.com/tfont/Skyfire/blob/master/functions/misc/list_directory.func.php)()** | **1.** $directory <br />**2.** $recursive <br />`= FALSE` | *`array`* | List of folders and files in a directory and/or sub-directories
| **[simple_address_verify](https://github.com/tfont/Skyfire/blob/master/functions/misc/simple_address_verify.func.php)()** | **1.**$address | *`bool`* | A simple address verification (USA only)
| ***» social*** | | | 
| ***» strings*** | | | 
| **[generate_password](https://github.com/tfont/Skyfire/blob/master/functions/strings/generate_password.func.php)()** | **1.** $length <br/>`= 9` <br />**2.** $strength <br />`= 4` | *`string`* | Generates a password based on length and crack strength
| **[get_file_ext](https://github.com/tfont/Skyfire/blob/master/functions/strings/get_file_ext.func.php)()** | **1.** $string | *`string`* | returns only the file extension (without the period) from the string
| **[remove_first_line](https://github.com/tfont/Skyfire/blob/master/functions/strings/remove_first_line.func.php)()** | **1.** $str | *`string`* | Removes the first line of a string
| **[str_to_slug](https://github.com/tfont/Skyfire/blob/master/functions/strings/str_to_slug.func.php)()** | **1.** $string | *`string`* | Converts a string into a url slug
| **[strip_file_ext](https://github.com/tfont/Skyfire/blob/master/functions/strings/strip_file_ext.func.php)()** | **1.** $string | *`string`* | Strips out the file extension from the string
| ***» xml*** | | | 
| **[format_xml_string](https://github.com/tfont/Skyfire/blob/master/functions/xml/format_xml_string.func.php)()** | **1.** $xml | *`string`* | Formats XML
| **[is_atom](https://github.com/tfont/Skyfire/blob/master/functions/xml/is_atom.func.php)()** | **1.** $feedxml | *`bool`* | Detects if the XML is a possible ATOM XML feed.
| **[is_rss](https://github.com/tfont/Skyfire/blob/master/functions/xml/is_rss.func.php)()** | **1.** $feedxml | *`bool`* | Detects if the XML is a possible RSS XML feed.
| **[xml_remove_parent_node](https://github.com/tfont/Skyfire/blob/master/functions/xml/xml_remove_parent_node.func.php)()** | **1.** &$xml <br />**2.** $node | *`object`*  | Removes the parent node from the XML
| **[xml_to_array](https://github.com/tfont/Skyfire/blob/master/functions/xml/xml_to_array.func.php)()** | **1.** $xml | *`array`*  | Converts XML to an array

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
route::url('contact/{department}')->controller('contact')::METHOD('POST');
route::url('news/{title}-{date}/{id}')->controller('news'); // 'GET' isn't required (default method)
route::url('news/{title}-{date}/{id}')->controller('news')::METHOD('GET');
 
..//controllers/news.php

news.php:

class news
{
    function GET($title, $date, $id)
    {
        // ....
    }
}
```
___________________________________________________________

####Todo:

- Add googlePlaces class
- Probably add "HTM-PHP" class