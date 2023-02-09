<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'orange', 'pear'];

// array length
// echo count($fruits);

// search array 
// var_dump(in_array('apple', $fruits));

// add to array 

//-- method 1
$fruits[] = 'grape';


// --method 2
array_push($fruits, 'blueberry', 'strawberry');


//  unshift
array_unshift($fruits, 'mango');

//  remove from array
// array_pop($fruits);
// array_shift($fruits);
// unset($fruits[2]);

//  split into 2 chunks
$chunked_array = array_chunk($fruits, 2);


// print_r($chunked_array);
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arr4);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

$keys = array_keys($c);
// print_r($keys);

// switches keys and values
$flipped = array_flip($c);

// print_r($flipped);
// print_r($c);

$numbers = range(1, 30);

// print_r($numbers);

$new_numbers = array_map(function ($number) {
  return "Number {$number}"; }, $numbers);

print_r($new_numbers);

// filter
$less_than_10 = array_filter($numbers, fn($number) => $number < 10);

// print_r($less_than_10);

$sum_all = array_reduce($numbers, fn($carry, $number) => $carry + $number);

// var_dump($sum_all);

// echo 'helooo';