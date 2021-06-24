<?php
  // Define a class
  class User {
    // Properties
    public $name;
    public $age;

    // Contstructor
    public function __construct($name, $age)
    {
      echo 'Class ' . __CLASS__ . ' instantiated <br>';
      $this->name = $name;
      $this->age = $age;
    }

    // Methods
    public function sayHello() {
      return $this->name.' Says Hello';
    }

    // Called when no other references to a certain object
    // Used for cleanup, closing connections, etc.
    public function __destruct()
    {
      echo 'destructor ran';
    }
  }

  $user1 = new User('Tyler', 35);
  echo $user1->name . ' is ' . $user1->age . ' years old<br>';
  echo $user1->sayHello();

  echo '<br><br>';
  $user2 = new User('Sarah', 25);
  echo $user2->name . ' is ' . $user2->age . ' years old<br>';
  echo $user2->sayHello();