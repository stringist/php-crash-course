<?php

/* ---------- File Handling --------- */

/*
File handling is the ability to read and write files on the server.
PHP has built in functions for reading and writing files.
*/

error_reporting(E_ALL);
$file = 'extras/users.txt';

if (file_exists($file)) {

  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = 'Kalle' . PHP_EOL . 'James' . PHP_EOL . 'Mikey';
  fwrite($handle, $contents);
  fclose($handle);
}