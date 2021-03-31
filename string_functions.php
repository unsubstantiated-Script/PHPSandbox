<?php

#substr()
#Returns a portion of a string...

// $output = substr('Hello', 1, 3);
// $output = substr('Hello', -2);
// echo $output;

#strlen()
#Returns string length

// $output = strlen('Cracker Jack');
// echo $output;

#strpos();
#finds the position of the first occurrence of a sub string

// $output = strpos('Hello World', 'W');

// echo $output;

#strrpos();
#finds the position of the last occurrence of a sub string

// $output = strrpos('Hello World', 'o');

// echo $output;

#trim()
#Trims white space

// $text = 'Hello World                    ';

// $trimmed = trim($text);

// var_dump($trimmed);

#strtoupper & strtolower

#Makes everything uppercase...

// $output = strtoupper('Hello World');

// echo $output;

// $output = strtolower('Hello World');

// echo $output;

#ucwords
#Capitalize first letter of each word

// $output = ucwords("hello bob jenkins!");

// echo $output;

#str_replace()
#Replace all occurrences of a search string with a replacement

// $text = "Hello Jimmy";

// $output = str_replace('Hello', 'Goodbye', $text);

// echo $output;

#is_string
#tests if something is actually a string...
// $val = 'Hello';

// $output = is_string($val);

// echo $output;

// $values = array(true, false, null, 'abc', 33, '33');

// foreach ($values as $value) {
//     if (is_string($value)) {
//         echo "{$value} is a string<br>";
//     }
// }

#gzcompress()
#compresses a long string
#gzuncompress()
#uncompresses a long string