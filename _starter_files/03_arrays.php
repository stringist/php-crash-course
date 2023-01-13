<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers = [1, 5, 7, 9];
$fruits = array('apple', 'orange', 'pear');

// var_dump($numbers, $fruits);

// echo $fruits[1];

// Associative array (javascript object)
$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

// echo $hex['blue'];

$user = [
  'first_name' => 'Charlie',
  'last_name' => 'Fields',
  'email' => 'charlie@nomail.com'
];

// echo $user['first_name'];

$users = [
  [
    'first_name' => 'Charlie',
    'last_name' => 'Fields',
    'email' => 'charlie@nomail.com'
  ],
  [
    'first_name' => 'Bill',
    'last_name' => 'Hill',
    'email' => 'bill@nomail.com'
  ],
  [
    'first_name' => 'John',
    'last_name' => 'Thomas',
    'email' => 'john@nomail.com'
  ]
];

// echo $users[1]['email'];

var_dump(json_encode($users));