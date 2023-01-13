<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

// for($x = 0; $x <= 10; $x++) {
//   echo "$x ";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

// $x = 1;
// while($x <= 15) {
//   echo 'Number ' . $x . '<br>';
//   $x = $x + 1;
// }


/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

// $x = 1;

// do {
//   echo 'Number ' . $x . '<br>';
//   $x++;
// } while ($x <= 5);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

$posts = ['first post', 'second post', 'third post'];

// for($x=0; $x < count($posts); $x++) {
//   echo $posts[$x];
// }

// foreach($posts as $post) {
//   echo $post;
// }

foreach($posts as $index => $post) {
  echo $index + 1 . ' - ' . $post . '<br>';
}

$user = [
'first_name' => 'Kalle',
'last_name' => 'Tiihonen',
  'email' => 'kalle@somemail.com'
];

foreach($user as $key => $value) {
  echo "$key - $value <br>";
}