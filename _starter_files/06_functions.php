<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/


function registerUser($email) {
  echo "$email registered";
}


// registerUser('user');

// default values, new parameters
function sum($n1 = 4, $n2 = 5){
  return $n1 + $n2;
}

$number = sum(10, 10);
// echo $number;

// anonymous function

$subtract = function ($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(10, 7);

// arrow function

$multiply = fn($n1, $n2) => $n1 * $n2;

echo $multiply(2, 3);