<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User
{
  public $name;
  public $email;
  public $password;

  //  A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
    echo 'constructor ran';
  }

  // method is a function that belongs to a class
  function set_name($name) {
    $this->name = $name;
    
  }

  function get_name() {
    return $this->name;
  }
  
}

// Instantiate a user object

$user1 = new User('Billy', 'billy@gmail.com', 'badpassword');
$user2 = new User('Jonny', 'johnnyboy@nobag.com', 'worsepassword');

// $user1 -> set_name('Billy');
// $user2 -> set_name('Mike');



// var_dump($user1);
// var_dump($user2);

echo $user1->email;
echo $user2->name;

// Inheritance

class Employee extends User {
  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', 'reallybadpassword', 'manager');

echo $employee1->get_title();