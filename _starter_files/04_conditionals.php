<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$t = date("H");

// if($t < 12) {
//   echo 'Good morning';
// } else if($t < 17) {
//   echo 'Good afternoon';
// } else {
//   echo 'Good evening';
// }
// ;

$posts = ['First Post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No posts to display';
// }

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// echo !empty($posts) ? $posts[0] : 'No posts';
// $firstPost = !empty($posts) ? $posts[0] : 'No posts';
// $firstPost = !empty($posts) ? $posts[0] : null;
$firstPost = $posts[0] ?? null;
// echo $firstPost;

/* -------- Switch Statements ------- */
$favcolor = '';
switch ($favcolor) {
  case 'red':
    echo 'your favorite color is red';
    break;
  case 'blue':
    echo 'your favorite color is blue';
    break;
  case 'green':
    echo 'your favorite color is green';
    break;
  default:
    echo 'Your favorite color is not red, blue, or green';
}
