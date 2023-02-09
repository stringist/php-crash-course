<?php
/* ---------- String Functions -------- */

/*
  Functions to work with strings
  https://www.php.net/manual/en/ref.strings.php
*/

$string = 'hello world';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('world', 'everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
  echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
  echo 'YES';
}

$string2 = '<script>alert(1)</script>';

// echo $string2;

echo htmlspecialchars($string2);

printf('%s likes to  %s', 'Kalle', 'code');
printf('1+1=%d', 1 + 1);