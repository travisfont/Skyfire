# Skyfire

Skyfire is an extension of Travis van der Font's awesome PHP coding adventures and finds.

This is not a micro-framework but simply a library.

Want to lurk a bit more? [See his twitter](https://twitter.com/travisfont)!

----------------------------

###Library:

***arrays*** 

***database*** 

***date*** 

- **[datetime_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/datetime_diff.func.php)() -** ....

- **[days_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/days_diff.func.php)() -** Days difference between two dates

- **[months_diff](https://github.com/tfont/Skyfire/blob/master/functions/date/months_diff.func.php)() -** Months difference between two dates

- **[show_time_left](https://github.com/tfont/Skyfire/blob/master/functions/date/show_time_left.func.php)() -** Displays the remain time (including day) from the input date

***html*** 

***math*** 

- **[crypto_rand](https://github.com/tfont/Skyfire/blob/master/functions/math/crypto_rand.func.php)() -** A secure replacement for number randomizing using OpenSSL

- **[display_percentage_saved](https://github.com/tfont/Skyfire/blob/master/functions/math/display_percentage_saved.func.php)() -** Calculates the percentage from original price to a new savings price

- **[leading_zero](https://github.com/tfont/Skyfire/blob/master/functions/math/leading_zero.func.php)() -** Adds leading zeros to any integer value

- **[random_number](https://github.com/tfont/Skyfire/blob/master/functions/math/random_number.func.php)() -** Basic number randomiser (includes leading zeros parameter)

***misc*** 

- **[get_coordinates_by_address](https://github.com/tfont/Skyfire/blob/master/functions/misc/get_coordinates_by_address.func.php)() -**  Gets Coordinates from an address

- **[is_utf8](https://github.com/tfont/Skyfire/blob/master/functions/misc/is_utf8.func.php)() -**  Returns true if the input string is valid UTF-8 and false otherwise

- **[list_directory](https://github.com/tfont/Skyfire/blob/master/functions/misc/list_directory.func.php)() -**  List of folders and files in a directory and/or sub-directories

- **[simple_address_verify](https://github.com/tfont/Skyfire/blob/master/functions/misc/simple_address_verify.func.php)() -**  A simple address verification (USA only)

***social*** 

***strings*** 

- **[generate_password](https://github.com/tfont/Skyfire/blob/master/functions/strings/generate_password.func.php)() -**  Generate a password based on length and crack strength

- **[str_to_slug](https://github.com/tfont/Skyfire/blob/master/functions/strings/str_to_slug.func.php)() -**  Convert a string into a url slug


- **[csv_to_array](https://github.com/tfont/Skyfire/blob/master/functions/strings/csv_to_array.func.php)() -**  Convert a CSV file to an associated array


####Class objects:


- **[get_exec_time] (https://github.com/tfont/Skyfire/blob/master/classes/get_exec_time.class.php) -**  php timer class (see how long a script takes to execute)

 * get_exec_time::start()
 * get_exec_time::end()
 * get_exec_time::$display
 
 
 ___________________________________________________________
 
 **useage:**
 
 load::library('date'); // will load all date library functions
 
load::library('date')->function('nextWeek'); // will load the nextWeek() from date library